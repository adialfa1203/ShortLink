<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use App\Mail\SampleMail; // Ganti dengan kelas mail yang sesuai

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
            'password' => 'required|min:8',
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

    public function sendEmail()
    {
        return view('Auth.ForgotPassword.SendEmail');
    }
    


    public function sendSampleEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        
        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            // Generate random verification code
            $verificationCode = mt_rand(100000, 999999);
            
            // Save the verification code in the user's database record
            $user->verification_code = $verificationCode;
            $user->save();

            // Send the verification code email
            $details = (object)[
                'name' => $user->name,
                'verificationCode' => $verificationCode,
            ];

            Mail::to($user->email)->send(new SampleMail($details));
            
            return redirect()->route('verification')->with('success', 'Kode berhasil dikirim');
        } else {
            return back()->withErrors(['email' => 'Email tidak terdaftar']);
        }
    }

    public function verification()
    {
        return view('Auth.ForgotPassword.VerificationCode');
    }
    public function verificationCode(Request $request)
    {
        $this->validate($request, [
            'verification_code' => 'required|digits:6',
        ],[
            'verification_code.required' => 'Kode verifikasi harus diisi.',
            'verification_code.digits' => 'Kode verifikasi harus terdiri dari 6 angka.',
        ]);

        $user = User::where('verification_code', $request->verification_code)
            ->first();
        // dd($user);

        if ($user) {
            return redirect()->route('changePassword', ['email' => $user->email]);
        } else {
            return back()->withErrors(['verification_code' => 'Kode verifikasi salah']);
        }
    }

    public function changePassword($email)
    {
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('verification')->withErrors(['email' => 'Email tidak valid']);
        }

        return view('Auth.ForgotPassword.ChangePassword', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required_with:password|same:password'
        ], [
            'password.required' => 'Kata sandi harus diisi.',
            'password.min' => 'Kata sandi minimal terdiri dari 8 karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'password_confirmation.required_with' => 'Konfirmasi kata sandi harus diisi.',
            'password_confirmation.same' => 'Kata sandi dan Konfirmasi Kata sandi tidak cocok.',
        ]);        

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Verifikasi kode atau email tidak valid']);
        }

        $user->password = Hash::make($request->password);
        $user->verification_code = null; // Clear verification code
        $user->save();
        return redirect()->route('login')->with('success', 'Password berhasil diubah. Silahkan login.');
    }


}
