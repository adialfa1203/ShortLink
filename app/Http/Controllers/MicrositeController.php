<?php

namespace App\Http\Controllers;
use App\Models\Button;
use App\Models\Social;
use App\Models\Microsite;
use App\Models\ButtonLink;
use App\Models\Components;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use AshAllenDesign\ShortURL\Classes\Builder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class MicrositeController extends Controller
{
    public function microsite(){
        $data = Microsite::all();
        return view('Microsite.MicrositeUser', compact('data'));
    }

    public function addMicrosite(){
        $data = Components::all();
        $button = Button::all();
        return view('microsite.AddMicrosite',compact('data', 'button'));
    }

    public function createMicrosite(Request $request)
    {
        $request->validate([
            'microsite_selection' => 'required',
            'name' => 'required',
            'link_microsite' => 'required',
        ]);
        $data = [
            'components_id' => $request->microsite_selection,
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'link_microsite' => $request->link_microsite,
        ];
        $microsite = Microsite::create($data);
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $micrositeObject = $builder->destinationUrl('https://www.youtube.com/')->make();
        ShortUrl::where('url_key', $micrositeObject->url_key)->update([
            'user_id' => auth()->id(),
            'microsite_id' => $microsite->id,
        ]);
        $short_id = ShortUrl::where('url_key', $micrositeObject->url_key)->first()->id;
        ShortUrl::findOrFail($short_id)->update([
            'url_key' => $request->link_microsite,
            'default_short_url' => "http://127.0.0.1:8000/link.id/" . $request->link_microsite,
        ]);
    
        // $selectedComponentId = $request->input('microsite_selection');
        // $selectedButtons = $request->input('selectedButtons', []);
    
        // // Cek apakah objek Components dengan ID yang dipilih ada
        // $component = Components::find($selectedComponentId);
        // if (!$component) {
        //     return back()->with('error', 'Komponen yang dipilih tidak ditemukan.');
        // }
    
        // $microsite = new Microsite();
        // $microsite->components_id = $selectedComponentId;
        // $microsite->user_id = auth()->user()->id;
        // $microsite->name = $request->input('name');
        // $microsite->link_microsite = 'link.id/' . $request->input('link_microsite');
    
        // $microsite->save();
    
        // foreach ($selectedButtons as $select) {
        //     Social::create([
        //         'buttons_id' => $select,
        //         'microsite_id' => $microsite->id
        //     ]);
        // }
    
        return redirect()->route('edit.microsite', ['id' => $microsite->id])->with('success', 'Microsite berhasil dibuat');
    }
    

    public function editMicrosite($id) {
        $microsite = Microsite::findorFail($id);
        $social = Social::where('microsite_id', $id)->get();
        // $buttonLink = ButtonLink::findorFail($id);
        return view('microsite.EditMicrosite', compact('microsite', 'id', 'social'));
    }


    public function updateMicrosite(Request $request, $id){
        $component = Components::find($id);
        $microsite = Microsite::find($id);
        $data = Microsite::all();
        $buttonLinks = $request->input('button_link');

        foreach ($buttonLinks as $socialId => $buttonLink) {
            $buttonLinkData = [
                'microsite_id' => $id,
                'buttons_id' => $socialId,
                'button_link' => $buttonLink
            ];
            ButtonLink::create($buttonLinkData);
        }
        // dd($buttonLinks);

        return redirect()->route('microsite', compact('data'))->with('success', 'Button links added successfully.');
    }

    public function createComponent(){
        return view('Microsite.CreateComponent');
    }

    public function saveComponent(Request $request){
        $validator = Validator::make($request->all(), [
            'component_name' => 'required',
            'cover_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $coverImage = $request->file('cover_img');
        $profileImage = $request->file('profile_img');

        $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
        $coverImage->move(public_path('component'), $coverImageName);

        $profileImageName = time() . '_profile.' . $profileImage->getClientOriginalExtension();
        $profileImage->move(public_path('component'), $profileImageName);

        $component = Components::create([
            'component_name' => $request->component_name,
            'cover_img' => $coverImageName,
            'profile_img' => $profileImageName,
        ]);
        return redirect()->route('view.component')->with('success', 'Component berhasil disimpan.');
    }

    public function editComponent($id){
        $component = Components::findOrFail($id);
        return view('Microsite.UpdateComponent', compact('component'));
    }

    public function updateComponent(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'component_name' => 'required',
            'cover_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $component = Components::findOrFail($id);

        if ($request->hasFile('cover_img')) {
            if (file_exists(public_path('component/' . $component->cover_img))) {
                unlink(public_path('component/' . $component->cover_img));
            }
        }

        if ($request->hasFile('profile_img')) {
            if (file_exists(public_path('component/' . $component->profile_img))) {
                unlink(public_path('component/' . $component->profile_img));
            }
        }

        if ($request->hasFile('cover_img')) {
            $coverImage = $request->file('cover_img');
            $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
            $coverImage->move(public_path('component'), $coverImageName);
            $component->cover_img = $coverImageName;
        }

        if ($request->hasFile('profile_img')) {
            $profileImage = $request->file('profile_img');
            $profileImageName = time() . '_profile.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path('component'), $profileImageName);
            $component->profile_img = $profileImageName;
        }
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
        if (file_exists(public_path('component/' . $component->profile_img))) {
            unlink(public_path('component/' . $component->profile_img));
        }
        $component->delete();

        return redirect()->back()->with('success', 'Component berhasil dihapus.');
    }

    public function viewComponent(){
        $component = Components::all();
        return view('Microsite.ViewComponent', compact('component'));
    }

    public function urlMicrosite(Request $request)
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $micrositeObject = $builder
                        ->destinationUrl('https://www.youtube.com/')
                        ->when(
                            $request->date('activation'),
                            function (Builder $builder) use($request) : Builder  {
                                return $builder
                                    ->activateAt(now())
                                    ->deactivateAt(Carbon::parse($request->deactivated_at));
                            },
                        )
                        ->make();
        $find = ShortUrl::query()->where('url_key', $micrositeObject->url_key)->first();

        $find->update([
            'user_id' => auth()->id(),
            'microsite_id' => $micrositeObject->link_microsite,
            'password' => Hash::make($request->password),
            'active' => $request->active,
            'deleted_add' => $request->deleted_add,
            'click_count' => $request->click_count,
            'qr_code' => $request->qr_code,
            'title' => $request->title,
            'deactivated_at' => $request->deactivated_at
        ]);

        return response()->json($find);
    }
    // public function nameMicrosite(Request $request, $microsite)
    // {
    //     $updateMicrosite = ShortUrl::where('url_key', $microsite);

    //     if (!$updateMicrosite->exists()) {
    //         return response()->json(['error' => 'Short link not found'], 404);
    //     }

    //     $newMicrositeKey = $request->newMicrositeKey;

    //     $updateMicrosite->update([
    //         'url_key' => $newMicrositeKey,
    //         'default_short_url' => "http://127.0.0.1:8000/link.id/" . $newMicrositeKey,
    //     ]);

    //     return response()->json(['message' => 'URL key updated successfully']);
    // }

    

}
