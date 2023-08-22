<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Support\Facades\Auth;

class DahsboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $totalVisits = ShortURLVisit::query('user_id', $user)->count();
        if ($user) {
            $userId = $user->id;
            
            // Menghitung total kunjungan berdasarkan user ID
            $countURL = ShortURL::where('user_id', $userId)->count();
        } 
        $ShortLink = ShortUrl::all();
        return view('User.DashboardUser',compact('ShortLink','totalVisits','countURL'));
    }
}
