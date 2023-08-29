<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkAdminController extends Controller
{
    public function linkAdmin()
    {
        //Menghitung total user
        $totalUser = User::where('email', '!=', 'admin@gmail.com')->count();
        //Menghitung total url
        $totalUrl = ShortUrl::count();
        //Menghitung total pengunjung
        $totalVisits = ShortURLVisit::query()->count();
        //Menampilkan data user di dalam tabel
        // $users = User::where('email', '!=', 'admin@gmail.com')->get();
        // //Menampilkan total url untuk setiap user
        // $count = [];
        // foreach ($users as $user) {
        //     $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        //
        $users = User::where('email', '!=', 'admin@gmail.com')->get();
        $count = [];
        foreach ($users as $user) {
            $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        }

        // Mengurutkan data berdasarkan jumlah pengunjung
        arsort($count);
        return view('Admin.LinkAdmin', compact('totalUser', 'totalUrl', 'totalVisits', 'users', 'count'));
    }
}
