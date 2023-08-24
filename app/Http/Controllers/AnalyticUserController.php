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
        $user = Auth::user()->id;


        $totalVisits = ShortURLVisit::query()
        ->whereRelation('shortURL', 'user_id', '=', $user)
        ->count();

        // find by id
        // bentuk array / collection
        // $shortURL = \AshAllenDesign\ShortURL\Models\ShortURL::find();

        // hitung jumlah array / collection dari shortURL
        // $visits = count($shortURL->visits) ;

        $countURL = ShortURL::where('user_id', $user)->count();

        return view('User.AnalyticUser', compact('totalVisits','countURL'));
    }
}
