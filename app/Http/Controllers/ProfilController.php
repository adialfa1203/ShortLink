<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function profile()
    {
        $user = User::where('name', 'adiganz')->first();
        return view('User.ProfilUser',compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Memeriksa apakah nama pengguna adalah "adiganz"
        if ($user->name === 'adiganz') {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'old_password' => [
                    'required_with:password',
                    function ($attribute, $value, $fail) {
                        if (!Hash::check($value, Auth::user()->password)) {
                            $fail(__('The :attribute is incorrect.'));
                        }
                    },
                ],
                'password' => 'nullable|min:8|confirmed',
                'new_password_confirmation' => 'required_with:password|same:password',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);            

            $user->name = $request->name;
            $user->email = $request->email;

            // Memeriksa apakah ada perubahan kata sandi
            if ($request->filled('new_password')) {
                // Memeriksa apakah kata sandi lama sesuai
                if (!Hash::check($request->old_password, $user->password)) {
                    return redirect()->back()->withErrors(['old_password' => 'Kata sandi lama tidak cocok.']);
                }
                $user->password = Hash::make($request->new_password);
            }

            // Upload dan simpan gambar profil jika ada
            if ($request->hasFile('profile_picture')) {
                $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
                $user->profile_picture = $profilePicturePath;
            }

            $user->save();

            return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
        } else {
            return redirect()->back()->withErrors(['message' => 'Anda tidak memiliki izin untuk mengedit profil.']);
        }
    }

    // public function updateProfile(Request $request)
    // {
    //     $user = Auth::user();

    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email,' . $user->id,
    //         'password' => 'nullable|min:8|confirmed',
    //         'old_password' => 'required_with:password',
    //         'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ], [
    //         'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
    //         'profile_picture.image' => 'File harus berupa gambar.',
    //         'profile_picture.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg.',
    //         'profile_picture.max' => 'Ukuran gambar tidak boleh melebihi 2MB.',
    //         'old_password.required_with' => 'Masukkan kata sandi lama untuk mengganti kata sandi baru.',
    //     ]);

    //     $user->name = $request->name;
    //     $user->email = $request->email;

    //     if ($request->password) {
    //         // Memeriksa apakah kata sandi lama benar sebelum mengizinkan perubahan kata sandi
    //         if (!Hash::check($request->old_password, $user->password)) {
    //             return redirect()->back()->withErrors(['old_password' => 'Kata sandi lama tidak benar.']);
    //         }

    //         $user->password = Hash::make($request->password);
    //     }

    //     if ($request->hasFile('profile_picture')) {
    //         // Hapus foto profil lama jika ada dan simpan foto baru
    //         if ($user->profile_picture) {
    //             Storage::delete('public/' . $user->profile_picture);
    //         }
    //         $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
    //         $user->profile_picture = $profilePicturePath;
    //     }

    //     $user->save();

    //     return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    // }

}