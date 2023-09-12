<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;

class DataUserController extends Controller
{
    public function dataUser() {
        $data = User::where('is_banned', 0)->role('user')->get();

        $totalUser = User::where('email', '!=', 'admin@gmail.com')->count();

        $totalUrl = ShortUrl::count();

        $totalMicrosite = ShortUrl::whereNotNull('microsite_id')->count();

        $totalVisits = ShortURLVisit::query()->count();

        $totaldiblokir = User::where('is_banned', 1)->count();

        $users = User::where('email', '!=', 'admin@gmail.com')->get();
        $totalUser -= 1;
        $count = [];
        foreach ($users as $user) {
            $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        }

        // Mengurutkan data berdasarkan jumlah pengunjung
        arsort($count);
        return view('Admin.DataUserAdmin', compact('data','totalUser', 'totalUrl', 'totalVisits', 'users', 'count','totalMicrosite','totaldiblokir'));
    }
    

    public function banUser($userId) {
        $user = User::findOrFail($userId);
        $user->ban();
        return redirect()->back()->with('success', 'Akun berhasil di blokir');
    }

    public function unbanUser($userId) {
        $user = User::findOrFail($userId);
        $user->unban();
        return redirect()->back()->with('success', 'Akun berhasil dilepaskan dari blokir');
    }

}
