<?php

namespace App\Http\Controllers;

use App\Models\Button;
use App\Models\Social;
use App\Models\Microsite;
use App\Models\Components;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MicrositeController extends Controller
{
    public function microsite()
    {
        $user_id = auth()->user()->id;
        $data = Microsite::where('user_id', $user_id)->get();
        $short_urls = ShortUrl::whereIn('microsite_id', $data->pluck('id'))->get();
        $urlshort = ShortUrl::withCount('visits')
        ->selectRaw('MONTH(created_at) as month')
        ->where('user_id', $user_id)
        ->orderBy('month', 'desc')
        ->get();
        return view('Microsite.MicrositeUser', compact('data', 'short_urls','urlshort'));
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
            'name' => 'required|string|max:10',
            'link_microsite' => 'required|unique:microsites,link_microsite,id',
        ]);
        $data = [
            'components_id' => $request->microsite_selection,
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
            'microsite_id' => $microsite->id,
        ]);
        $short_id = ShortUrl::where('url_key', $micrositeObject->url_key)->first()->id;
        ShortUrl::findOrFail($short_id)->update([
            'url_key' => $request->link_microsite,
            'default_short_url' => "http://127.0.0.1:8000/link.id/" . $request->link_microsite,
        ]);

        foreach ($selectedButtons as $select) {
            $socialData = [
                'buttons_id' => $select,
                'microsite_id' => $microsite->id,
                'button_link' => null,
            ];
            Social::create($socialData);
        }

        return redirect()->route('edit.microsite', ['id' => $microsite->id])->with('success', 'Microsite berhasil dibuat');
    }

    public function editMicrosite($id)
    {
        $microsite = Microsite::findorFail($id);
        $social = Social::where('microsite_id', $id)->get();
        $short_url = ShortUrl::where('microsite_id', $id)->first();
        // $buttonLink = ButtonLink::findorFail($id);
        return view('microsite.EditMicrosite', compact('microsite', 'id', 'social', 'short_url'));
    }

    public function micrositeUpdate(Request $request, $id)
    {
        $microsite = Microsite::FindOrFail($id);
        $socials = Social::where('microsite_id', $id)->get();
        $buttonLinks = $request->input('button_link');

        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:10',
            'name_microsite' => 'nullable|string|max:10',
            'description' => 'nullable|string|max:115',
            'company_name' => 'nullable|string|max:15',
            'company_address' => 'nullable|string|max:35',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
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
            $social = Social::where('microsite_id', $id)
            ->where('buttons_id', $index)->first();

            if ($social) {
                $social->update([
                    'button_link' => $buttonLink,
                ]);
            }
        }
        // dd($buttonLinks);
        return redirect()->route('microsite')->with('success', 'Button links added successfully.');
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
        $component = Components::all();
        return view('Microsite.ViewComponent', compact('component'));
    }

    public function search(Request $request)
    {
        $query = $request->input('name');
        $results = Microsite::where('field', 'like', '%' . $query . '%')->get();

        return response()->json(['results' => $results]);
    }

    public function micrositeLink($microsite)
    {
        $accessMicrosite = Microsite::where('link_microsite', $microsite)->first();
        return view('Microsite.MicrositeLink', compact('accessMicrosite'));
    }
}
