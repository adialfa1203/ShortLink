<?php

namespace App\Http\Controllers;

use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Http\Request;

class AnalyticUserController extends Controller
{
    public function analyticUser()
    {

        // total semua
        $totalVisits = ShortURLVisit::query()->count();

        // find by id
        // bentuk array / collection
        $shortURL = \AshAllenDesign\ShortURL\Models\ShortURL::find(28);

        // hitung jumlah array / collection dari shortURL
        $visits = count($shortURL->visits) ;


        return view('User.AnalyticUser', compact('totalVisits'));
    }
    public function Analitik()
    {
        return view('Analitik');
    }
}
