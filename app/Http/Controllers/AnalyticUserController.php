<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalyticUserController extends Controller
{
    public function analyticUser()
    {
        $user = Auth::user();

        // total semua
        $totalVisits = ShortURLVisit::query('user_id', $user)->count();
        // dd($user,$totalVisits);
        // find by id
        // bentuk array / collection
        // $shortURL = \AshAllenDesign\ShortURL\Models\ShortURL::find();

        // hitung jumlah array / collection dari shortURL
        // $visits = count($shortURL->visits) ;
        

        if ($user) {
            $userId = $user->id;
            
            // Menghitung total kunjungan berdasarkan user ID
            $countURL = ShortURL::where('user_id', $userId)->count();
        } 

        return view('User.AnalyticUser', compact('totalVisits','countURL'));
    }

    public function Analitik()
    {
        return view('Analitik');
    }
}
