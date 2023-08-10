<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginuser(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Gunakan fungsi hasRole untuk memeriksa role pengguna
            if ($user->hasRole('admin')) {
                return redirect()->route('');
            } elseif ($user->hasRole('user')) {
                return redirect()->route('');
            }
        }
        return redirect()->route('login')->with('error', 'Email Atau Password Yang Anda Masukkan Salah');
    }

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }
}
