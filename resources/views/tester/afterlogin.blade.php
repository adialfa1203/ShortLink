<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function profileAdmin()
    {
        $admin = Auth::user();
        return view('Admin.ProfilAdmin', compact('admin'));
    }
    
    public function updateAdmin(Request $request)
    {
        $admin = Auth::user(); 
        $request->validate([
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email,' . $admin->id,
            'number' => 'required', // Sesuaikan dengan kebutuhan Anda
            'old_password' => 'required_with:new_password', // Memerlukan old_password hanya jika new_password diisi
            'new_password' => 'nullable|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg',
        ],);

    
// dd($request);
        // Mengisi data pengguna dengan data yang diinputkan oleh pengguna
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->number = $request->number;
    
// Memeriksa dan mengupdate kata sandi jika diinputkan
        if ($request->filled('new_password')) {
            if (!Hash::check($request->old_password, $admin->password)) {
                return redirect()->back()->withErrors(['old_password' => 'Kata sandi lama tidak cocok.']);
            }
            $admin->password = Hash::make($request->new_password);
        }
    
// Upload dan simpan gambar profil jika ada
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $admin->profile_picture = $profilePicturePath;
        }
    
        $admin->save(); // Menyimpan perubahan pada data pengguna
        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }


}