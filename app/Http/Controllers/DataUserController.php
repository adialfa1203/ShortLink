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

        $totalMicrosite = ShortUrl::where('microsite_id')->get()->count();

        $totalVisits = ShortURLVisit::query()->count();

        $users = User::where('email', '!=', 'admin@gmail.com')->get();
        $count = [];
        foreach ($users as $user) {
            $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        }

        // Mengurutkan data berdasarkan jumlah pengunjung
        arsort($count);
        return view('Admin.DataUserAdmin', compact('data','totalUser', 'totalUrl', 'totalVisits', 'users', 'count','totalMicrosite'));
    }
    

    public function banUser($userId) {
        $user = User::findOrFail($userId);
        $user->ban();
        return redirect()->back()->with('success', 'Anda telah mengBanned user ini');
    }

    public function unbanUser($userId) {
        $user = User::findOrFail($userId);
        $user->unban();
        return redirect()->back()->with('success', 'Anda telah mengUnbanned user ini');
    }

}
