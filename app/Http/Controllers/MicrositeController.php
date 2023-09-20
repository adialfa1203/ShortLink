<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Models\Button;
use App\Models\Social;
use App\Models\ShortUrl;
use App\Models\Microsite;
use App\Models\Components;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MicrositeController extends Controller
{
    public function microsite(Request $request )
    {
        $user_id = auth()->user()->id;

        if ($request->has('filter') && $request->filter == 'terakhir_diperbarui') {
            $data = Microsite::with('user_id', $user_id)
                ->orderBy('updated_at', 'desc')
                ->get();
            $d = $data;
        }
        else {
            $data = Microsite::with('shortUrl')
            ->where('user_id', $user_id)
            ->get();
            $d = $data;
             
        }
        $url = ShortUrl::where('user_id', $user_id)->with('shortUrls')->get();
        // dd($url);
        $urlshort = ShortUrl::withCount('visits')
        ->where('user_id', $user_id)
        ->orderBy('created_at', 'desc')
            ->get();
            $result = [
                'labels' => DateHelper::getAllMonths(5),
                'series' => []
            ];
    
    
            $startDate = DateHelper::getSomeMonthsAgoFromNow(5)->format('Y-m-d H:i:s');
            $endDate = DateHelper::getCurrentTimestamp('Y-m-d H:i:s');
    
            $template = [0,0,0,0,0];
    
            foreach ($urlshort as $i => $data) {
                $parse = Carbon::parse($data->created_at);
                $date = $parse->shortMonthName . ' ' . $parse->year;
                $index = array_search($date, array_values($result['labels']));
                $visits = $template;
                $visits[4] = (int)$data->visits_count;
                $result['series'][$i] = $visits;
            }

        $short_urls = ShortUrl::whereIn('microsite_uuid', $data->pluck('id'))->get();
        return view('Microsite.MicrositeUser', compact('data', 'urlshort', 'short_urls','result', 'd','url'));
    }
    
    public function addMicrosite()
    {
        $data = Components::all();
        $button = Button::all();
        return view('microsite.AddMicrosite', compact('data', 'button'));
    }

    public function createMicrosite(Request $request, Microsite $microsite)
    {
        $request->validate([
            'microsite_selection' => 'required',
            'name' => 'required|string|regex:/^[^-+]+$/u|max:10',
            'link_microsite' => 'required|regex:/^[^-+]+$/u|unique:microsites,link_microsite,id',
        ]);
        $data = [
            'components_uuid' => $request->microsite_selection,
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'link_microsite' => $request->link_microsite,
        ];

        $selectedComponentId = $request->input('microsite_selection');
        $selectedButtons = $request->input('selectedButtons', []);

        $microsite = Microsite::create($data);
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $micrositeObject = $builder->destinationUrl(route('microsite.short.link', $microsite->link_microsite))->make();
        ShortUrl::where('url_key', $micrositeObject->url_key)->update([
            'user_id' => auth()->id(),
            'microsite_uuid' => $microsite->id,
        ]);
        $short_id = ShortUrl::where('url_key', $micrositeObject->url_key)->first()->id;
        ShortUrl::findOrFail($short_id)->update([
            'url_key' => $request->link_microsite,
            'default_short_url' => "http://127.0.0.1:8000/link.id/" . $request->link_microsite,
        ]);

        foreach ($selectedButtons as $select) {
            $socialData = [
                'buttons_uuid' => $select,
                'microsite_uuid' => $microsite->id,
                'button_link' => null,
            ];
            Social::create($socialData);
        }
        // dd($request);

        return redirect()->route('edit.microsite', ['id' => $microsite->id])->with('success', 'Microsite berhasil dibuat');
    }

    public function editMicrosite($id)
    {
        $microsite = Microsite::findorFail($id);
        $social = Social::where('microsite_uuid', $id)->get();
        $short_url = ShortUrl::where('microsite_uuid', $id)->first();
        // $buttonLink = ButtonLink::findorFail($id);
        return view('microsite.EditMicrosite', compact('microsite', 'id', 'social', 'short_url'));
    }

    public function micrositeUpdate(Request $request, $id)
    {
        $microsite = Microsite::findOrFail($id);
        $socials = Social::where('microsite_uuid', $id)->get();
        $buttonLinks = $request->input('button_link');

        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:10',
            'name_microsite' => 'nullable|string|max:10',
            'description' => 'nullable|string|max:115',
            'company_name' => 'nullable|string|max:15',
            'company_address' => 'nullable|string|max:35',
        ],[
            'button_link.name_button.required' => 'Kolom :name_button harus diisi!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Kesalahan, ada kolom yang belum terisi dengan benar!');
        }

        if ($request->has('name')) {
            $microsite->name = $request->input('name');
        }
        if ($request->has('name_microsite')) {
            $microsite->name_microsite = $request->input('name_microsite');
        }
        if ($request->has('description')) {
            $microsite->description = $request->input('description');
        }
        if ($request->has('company_name')) {
            $microsite->company_name = $request->input('company_name');
        }
        if ($request->has('company_address')) {
            $microsite->company_address = $request->input('company_address');
        }
        $microsite->save();

        foreach ($buttonLinks as $index => $buttonLink) {
            if ($buttonLink !== null) {
                // Ubah 'buttons_uuid' ke 'id' jika Anda ingin mencocokkan dengan 'id' dari tabel 'buttons'
                $social = $socials->where('buttons_uuid', $index)->first();

                if ($social) {
                    $social->button_link = $buttonLink;
                    $social->save();
                }
            }
        }

        return redirect()->route('microsite')->with('success', 'Microsite sudah berhasil diperbarui.');
    }


    public function createComponent()
    {
        return view('Microsite.CreateComponent');
    }

    public function saveComponent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'component_name' => 'required|string|max:12',
            'cover_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'profile_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $coverImage = $request->file('cover_img');
        $profileImage = $request->file('profile_img');

        $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
        $coverImage->move(public_path('component'), $coverImageName);

        // $profileImageName = time() . '_profile.' . $profileImage->getClientOriginalExtension();
        // $profileImage->move(public_path('component'), $profileImageName);

        $component = Components::create([
            'component_name' => $request->component_name,
            'cover_img' => $coverImageName,
            // 'profile_img' => $profileImageName,
        ]);
        return redirect()->route('view.component')->with('success', 'Component berhasil disimpan.');
    }

    public function editComponent($id)
    {
        $component = Components::findOrFail($id);
        return view('Microsite.UpdateComponent', compact('component'));
    }

    public function updateComponent(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'component_name' => 'required|max:10',
            'cover_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $component = Components::findOrFail($id);

        if ($request->hasFile('cover_img')) {
            if (file_exists(public_path('component/' . $component->cover_img))) {
                unlink(public_path('component/' . $component->cover_img));
            }
        }

        // if ($request->hasFile('profile_img')) {
        //     if (file_exists(public_path('component/' . $component->profile_img))) {
        //         unlink(public_path('component/' . $component->profile_img));
        //     }
        // }

        if ($request->hasFile('cover_img')) {
            $coverImage = $request->file('cover_img');
            $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
            $coverImage->move(public_path('component'), $coverImageName);
            $component->cover_img = $coverImageName;
        }

        // if ($request->hasFile('profile_img')) {
        //     $profileImage = $request->file('profile_img');
        //     $profileImageName = time() . '_profile.' . $profileImage->getClientOriginalExtension();
        //     $profileImage->move(public_path('component'), $profileImageName);
        //     $component->profile_img = $profileImageName;
        // }
        $component->component_name = $request->component_name;
        $component->save();
        // dd($request);
        return redirect()->route('view.component')->with('success', 'Component berhasil diupdate.');
    }


    public function deleteComponent($id)
    {
        $component = Components::findOrFail($id);

        $micrositeCount = Microsite::where('components_uuid', $id)->count();

        if ($micrositeCount > 0) {
            return redirect()->back()->with('error', 'Tidak dapat menghapus komponen ini karena masih ada data terkait.');
        }

        if (file_exists(public_path('component/' . $component->cover_img))) {
            unlink(public_path('component/' . $component->cover_img));
        }
        // if (file_exists(public_path('component/' . $component->profile_img))) {
        //     unlink(public_path('component/' . $component->profile_img));
        // }
        $component->delete();

        return redirect()->back()->with('success', 'Component berhasil dihapus.');
    }


    public function viewComponent()
    {
        $component = Components::paginate(6);
        return view('Microsite.ViewComponent', compact('component'));
    }

    public function search(Request $request)
    {
        $query = $request->input('name');
        $results = Microsite::where('field', 'like', '%' . $query . '%')->get();

        return response()->json(['results' => $results]);
    }


}
