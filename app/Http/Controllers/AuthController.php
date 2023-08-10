<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function login(){
        return view('loginRegister\Login');
    }

    public function loginuser(Request $request){
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->back()->with('success', 'Login Admin Berhasil');
            } elseif ($user->hasRole('user')) {
                return redirect()->back()->with('success', 'Login User Berhasil');
            }
        }
        return redirect()->back()->with('error', 'Email Atau Password Yang Anda Masukkan Salah');
    }

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }
}
