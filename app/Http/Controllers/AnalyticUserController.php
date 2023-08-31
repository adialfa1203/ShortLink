<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Support\Facades\Auth;

class AnalyticUserController extends Controller
{
    public function analyticUser()
    {
        $user = Auth::user()->id;

        $links = ShortUrl::withCount([
            'visits AS totalVisits' => function ($query) use ($user) {
                $query->whereHas('shortURL', function ($query) use ($user) {
                    $query->where('user_id', $user);
                });
            }
        ])->get();

        $countURL = ShortURL::where('user_id', $user)->count();

        $totalVisits = ShortURLVisit::query()
        ->whereRelation('shortURL', 'user_id', '=', $user)
        ->count();

        $users = User::where('email', '!=', 'admin@gmail.com')->get();
        $count = [];
        foreach ($users as $user) {
            $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        }
        // Mengurutkan data berdasarkan jumlah pengunjung
        arsort($count);
        // find by id
        // bentuk array / collection
        // $shortURL = \AshAllenDesign\ShortURL\Models\ShortURL::find();

        // hitung jumlah array / collection dari shortURL
        // $visits = count($shortURL->visits) ;

        // dd($totalVisits,$countURL);
        return view('User.AnalyticUser', compact('totalVisits','countURL','count','users','links'));
    }
}
