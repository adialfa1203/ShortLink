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
        $user = auth()->user(); // Mengambil objek User saat ini
        $user_id = $user->id;
        $microsite = Microsite::all();
        $data = Microsite::where('user_id', $user_id)->get();
        return view('Microsite.MicrositeUser', compact('data', 'user', 'microsite'));
    
        // $user_id = auth()->user()->id;
        // $microsite = Microsite::all();
        // $data = Microsite::where('user_id', $user_id)->get();
        // return view('Microsite.MicrositeUser', compact('data','user_id','microsite'));
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

        $selectedComponentId = $request->input('microsite_selection');
        $selectedButtons = $request->input('selectedButtons', []);

        $microsite = new Microsite();
        $microsite->components_id = $selectedComponentId;
        $microsite->user_id = auth()->user()->id;
        $microsite->name = $request->input('name');
        $microsite->link_microsite = 'link.id/' . $request->input('link_microsite');

        $microsite->save();

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


    public function editMicrosite($id) {
        $microsite = Microsite::findorFail($id);
        $social = Social::where('microsite_id', $id)->get();
        // $buttonLink = ButtonLink::findorFail($id);
        return view('microsite.EditMicrosite', compact('microsite', 'id', 'social'));
    }

    public function micrositeUpdate(Request $request, $id)
    {
        $component = Components::FindOrFail($id);
        $microsite = Microsite::FindOrFail($id);
        $buttonLinks = $request->input('button_link');
        $socials = Social::where('microsite_id',$id)->get();
        $request->validate([
            'name_microsite' => 'nullable|string',
            'description' => 'nullable|string',
            'company_name' => 'nullable|string',
            'company_address' => 'nullable|string',
        ]);
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
        foreach($socials as $index => $social)
        {
            $social->update([
                'button_link' => $buttonLinks[$index],
            ]);
        }

        return redirect()->route('microsite')->with('success', 'Button links added successfully.');
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

    public function micrositeLink(){
        // $microsite = Microsite::findorFail($id);
        // $social = Social::where('microsite_id', $id)->get();
        return view('Microsite.MicrositeLink');
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
    public function search(Request $request)
{
    $query = $request->input('name'); // Mengubah 'query' menjadi 'name'

    // Lakukan logika pencarian Anda di sini, misalnya:
    $results = Microsite::where('field', 'like', '%' . $query . '%')->get();

    return response()->json(['results' => $results]);
}

    
    

}
