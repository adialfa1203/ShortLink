<?php

namespace App\Http\Controllers;
use App\Models\Button;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ButtonController extends Controller
{
    public function viewButton(){
        $button = Button::paginate(8);
        return view('Button.ViewButton', compact('button'));
    }

    public function createButton(){
        return view('Button.CreateButton');
    }


    public function saveButton(Request $request)
    {
        $validatedData = $request->validate([
            'name_button' => 'required|string|max:255',
            'icon' => ['required', Rule::in(['bi bi-whatsapp', 'bi bi-facebook', 'bi bi-twitter', 'bi bi-telephone-fill', 'bi bi-instagram', 'bi bi-linkedin', 'bi bi-telegram', 'bi bi-tiktok', 'bi bi-spotify'])],
            'color_hex' => 'nullable|string|max:7',
        ]);

        $button = Button::create([
            'name_button' => $request->name_button,
            'icon' => $request->icon,
            'color_hex' => $request->color_hex,
        ]);
        return redirect()->route('view.button')->with('success', 'Button berhasil ditambah.');
    }

    public function editButton($id){
        $button = Button::find($id);
        return view('Button.UpdateButton', compact('button'));
    }

    public function updateButton(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name_button' => 'required|string|max:255',
            'icon' => ['required', Rule::in(['bi bi-whatsapp', 'bi bi-facebook', 'bi bi-twitter', 'bi bi-telephone-fill', 'bi bi-instagram', 'bi bi-linkedin', 'bi bi-telegram', 'bi bi-tiktok', 'bi bi-spotify'])],
            'color_hex' => 'nullable|string|max:7',
        ]);

        $button = Button::findOrFail($id);

        $button->name_button = $request->name_button;
        $button->icon = $request->icon;
        $button->color_hex = $request->color_hex;

        $button->save();

        return redirect()->route('view.button')->with('success', 'Button berhasil diupdate.');
    }

    public function deleteButton($id)
    {
        $button = Button::findOrFail($id);
        $socialCount = Social::where('buttons_id', $id)->count();

        if ($socialCount > 0) {
            return redirect()->back()->with('error', 'Tidak dapat menghapus Sosial ini karena masih ada data terkait.');
        }

        $button->delete();

        return redirect()->route('view.button')->with('success', 'Button sukses dihapus.');
    }

}
