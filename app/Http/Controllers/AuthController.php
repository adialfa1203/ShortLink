<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function login(){
        return view('Auth\Login');
    }

    public function loginuser(Request $request){
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Ambil nilai "Ingat Saya" dari permintaan
        
        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
    
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard')->with('success', 'Login Admin Berhasil');
            } elseif ($user->hasRole('user')) {
                return redirect()->route('user.dashboard')->with('success', 'Login User Berhasil');
            }
        }
        return redirect()->route('login')->with('error', 'Email atau Password Yang Anda Masukkan Salah');
    }    
    

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

    public function register()
    {
        return view('Auth.Register');
    }

    public function registeruser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password'
        ], [
            'password_confirmation.same' => 'Password dan Konfirmasi Password tidak cocok.',
            'email.unique' => 'Email sudah terdaftar, silahkan gunakan email lain.'
        ]);
        // $name = 'adi';
        // $email = 'adi@gmail.com';
        // $number = '876543456';
        // $password = '12345';

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('user');
        
        return redirect()->route('login')->with('success', 'Regristrasi berhasil. Silahkan login');
    }
}
