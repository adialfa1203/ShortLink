<?php

namespace App\Http\Controllers;
use App\Models\ShortUrl;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Carbon\Carbon;
use Flasher\Laravel\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalyticUserController extends Controller
{
    public function AnalyticUsersChart()
    {
        $user = Auth::user()->id;

        $startDate = Carbon::now()->subDays(7);

        $totalUrl = ShortURL::where('created_at', '>=', $startDate)        
        ->selectRaw('DATE(created_at) as date, COUNT(*) as totalUrl')
        ->groupBy('date')
        ->orderBy('date')
        ->get();

        $totalVisits = ShortURLVisit::query()
        ->whereRelation('shortURL', 'user_id', '=', $user)
        ->selectRaw('DATE(created_at) as date, COUNT(*) as totalVisits')
        ->groupBy('date')
        ->orderBy('date')
        ->get();

        return response()->json(compact('startDate', 'user', 'totalUrl', 'totalVisits'));
    }


    public function analyticUser()
    {
        $user = Auth::user()->id;

        $links = ShortUrl::withCount([
            'visits AS totalVisits' => function ($query) use ($user) {
                $query->whereHas('shortURL', function ($query) use ($user) {
                    $query->where('user_id', $user);
                });
            }
        ])
        ->whereNull('microsite_id')
        ->orderBy('totalVisits', 'desc')
        ->take(3)
        ->get();

        $microsites = ShortUrl::withCount([
            'visits AS totalVisits' => function ($query) use ($user) {
                $query->whereHas('shortUrl', function ($query) use ($user) {
                    $query->where('user_id', $user);
                });
            }
        ])
        ->whereNotNull('microsite_id')
        ->orderBy('totalVisits', 'desc')
        ->take(3)
        ->get();

        $countURL = ShortURL::where('user_id', $user)
                            ->whereNull('microsite_id')
                            ->count();
        $countMicrosite = ShortUrl::where('microsite_id', $user)->count();

        $dataLink = SHortURL::all();

        $totalVisits = ShortURLVisit::query()
        ->whereRelation('shortURL', 'user_id', '=', $user)
        ->count();

        $totalVisitsMicrosite = ShortURLVisit::query()
        ->whereRelation('shortURL', 'user_id', '=', $user)
        ->where('user_id')
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
        return view('User.AnalyticUser', compact('totalVisits','countURL','count','users','links', 'dataLink', 'countMicrosite', 'microsites','totalVisitsMicrosite'));
    }

}
