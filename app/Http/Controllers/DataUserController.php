<?php

namespace App\Http\Controllers;

use App\Mail\BlokirEmail;
use App\Mail\unblockEmail;
use App\Models\ShortUrl;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Support\Facades\Mail;

class DataUserController extends Controller
{
    public function dataUser() {
        $data = User::where('is_banned', 0)->role('user')->get();

        $totalUser = User::where('email', '!=', 'admin@gmail.com')
                    ->where('is_banned', '!=', '0')
                    ->count();

        $totalUrl = ShortUrl::where('archive', '!=', 'yes')->count();

        $totalMicrosite = ShortUrl::whereNotNull('microsite_id')->count();

        $totalVisits = ShortURLVisit::query()
                            ->whereRelation('shortURL', 'archive', '!=', 'yes')
                            ->count();

        $totaldiblokir = User::where('is_banned', 1)->count();

        $users = User::where('email', '!=', 'admin@gmail.com')->get();
        $count = [];
        foreach ($users as $user) {
            $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        }

        // Mengurutkan data berdasarkan jumlah pengunjung
        arsort($count);
        return view('Admin.DataUserAdmin', compact('data','totalUser', 'totalUrl', 'totalVisits', 'users', 'count','totalMicrosite', 'totaldiblokir'));
    }
    

    public function banUser($userId) {
        $user = User::findOrFail($userId);
        if (!$user->ban()) {
            // Proses pemblokiran berhasil, kirim email
            Mail::to($user->email)->send(new BlokirEmail());
            return redirect()->back()->with('success', 'Akun berhasil di blokir');
        } else {
            // Proses pemblokiran gagal, berikan pesan kesalahan
            return redirect()->back()->with('error', 'Gagal memblokir akun');
        }
    }
    
    public function unbanUser($userId) {
        $user = User::findOrFail($userId);
        if (!$user->unban()) {
            // Proses pemblokiran berhasil, kirim email
            Mail::to($user->email)->send(new unblockEmail());
            return redirect()->back()->with('success', 'Akun berhasil dilepaskan dari blokir');
        } else {
            // Proses pemblokiran gagal, berikan pesan kesalahan
            return redirect()->back()->with('error', 'Gagal melespakan akun dari blokir akun');
        }
    }

}
