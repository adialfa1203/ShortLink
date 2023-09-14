<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\ShortUrl;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Auth;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;

class AnalyticUserController extends Controller
{
    public function AnalyticUsersChart()
    {
        $user = Auth::user()->id;

        $endDate = Carbon::now();
        $startDate = $endDate->copy()->subDays(6);

        $totalUrl = ShortURL::where('created_at', '>=', $startDate)
        ->selectRaw('DATE(created_at) as date, COUNT(*) as totalUrl')
        ->groupBy('date')
        ->orderBy('date')
        ->get();
        $dateRange = CarbonPeriod::create($startDate, '1 day', $endDate);

        $totalUrlData = [];
        $totalVisitsData = [];

        foreach ($dateRange as $date) {
            $dateString = $date->format('Y-m-d');

            $totalUrl = ShortURL::whereDate('created_at', $dateString)
                ->where('user_id', $user)
                ->count();

            $totalVisits = ShortURLVisit::whereHas('shortURL', function ($query) use ($user) {
                    $query->where('user_id', $user)
                        ->where('archive', '!=', 'yes');
                })
                ->whereDate('created_at', $dateString)
                ->count();

            $totalUrlData[] = ['date' => $dateString, 'totalUrl' => $totalUrl];
            $totalVisitsData[] = ['date' => $dateString, 'totalVisits' => $totalVisits];
        }

        if (count($totalUrlData) < 7) {
            $missingDays = 7 - count($totalUrlData);
            $missingStartDate = $startDate->copy()->subDays($missingDays);
            $missingDateRange = CarbonPeriod::create($missingStartDate, '1 day', $startDate->copy()->subDay());

            foreach ($missingDateRange as $date) {
                $dateString = $date->format('Y-m-d');
                $totalUrlData[] = ['date' => $dateString, 'totalUrl' => 0];
                $totalVisitsData[] = ['date' => $dateString, 'totalVisits' => 0];
            }
        }

        return response()->json(['startDate' => $startDate, 'user' => $user, 'totalUrlData' => $totalUrlData, 'totalVisitsData' => $totalVisitsData]);
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
        return view('User.AnalyticUser', compact('totalVisits','countURL','count','users','links', 'dataLink', 'countMicrosite', 'microsites'));
    }

}
