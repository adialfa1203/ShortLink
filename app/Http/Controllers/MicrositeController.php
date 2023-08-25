<?php

namespace App\Http\Controllers;
use App\Models\Components;
use App\Models\Microsite;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class MicrositeController extends Controller
{
    public function microsite(){
        $data = Microsite::all();
        return view('Microsite.MicrositeUser', compact('data'));
    }

    public function addMicrosite(){
        $data = Components::all();
        return view('microsite.AddMicrosite',compact('data'));
    }

    public function createMicrosite(Request $request){
            $request->validate([
                'microsite_selection' => 'required',
                'name' => 'required',
                'link_microsite' => 'required',
            ]);

            $selectedComponentId = $request->input('microsite_selection');

            $microsite = new Microsite();
            $microsite->components_id = $selectedComponentId;
            $microsite->user_id = auth()->user()->id;
            $microsite->name = $request->input('name');
            $microsite->link_microsite = 'link.id/' . $request->input('link_microsite');
            $microsite->save();

            return redirect()->route('edit.microsite', ['id' => $microsite->id])->with('success', 'Microsite berhasil dibuat');
    }

    public function editMicrosite($id){
            $component = Components::find($id);
            $microsite = Microsite::find($id);

            return view('microsite.EditMicrosite', compact('component', 'microsite'));
    }

    public function updateMicrosite($id){
        $component = Components::find($id);
        $microsite = Microsite::find($id);

        $data = [
            'components' => $component,
            'microsite' => $microsite
        ];
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
}
