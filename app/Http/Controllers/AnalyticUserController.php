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

        $dateRange = CarbonPeriod::create($startDate, '1 day', $endDate);

        $totalUrlData = [];
        $totalVisitsData = [];
        $totalVisitsMicrositeData = [];
        $countMicrositeData = [];

        foreach ($dateRange as $date) {
            $dateString = $date->format('Y-m-d');

            $countURL = ShortURL::where('user_id', $user)
                ->whereNull('microsite_id')
                ->whereDate('created_at', $dateString)
                ->count();

            $countMicrosite = ShortUrl::where('microsite_id', $user)
                ->whereDate('created_at', $dateString)
                ->count();

            $totalVisits = ShortURLVisit::whereHas('shortURL', function ($query) use ($user) {
                    $query->where('user_id', $user)
                        ->whereNull('microsite_id')
                        ->where('archive', '!=', 'yes');
                })
                ->whereDate('created_at', $dateString)
                ->count();

            $totalVisitsMicrosite = ShortURLVisit::whereHas('shortURL', function ($query) use ($user) {
                    $query->where('user_id', $user)
                        ->whereNotNull('microsite_id');
                })
                ->whereDate('created_at', $dateString)
                ->count();

            $totalUrlData[] = ['date' => $dateString, 'totalUrl' => $countURL];
            $totalVisitsData[] = ['date' => $dateString, 'totalVisits' => $totalVisits];
            $totalVisitsMicrositeData[] = ['date' => $dateString, 'totalVisitsMicrosite' => $totalVisitsMicrosite];
            $countMicrositeData[] = ['date' => $dateString, 'countMicrosite' => $countMicrosite];
        }

        if (count($totalUrlData) < 7) {
            $missingDays = 7 - count($totalUrlData);
            $missingStartDate = $startDate->copy()->subDays($missingDays);
            $missingDateRange = CarbonPeriod::create($missingStartDate, '1 day', $startDate->copy()->subDay());

            foreach ($missingDateRange as $date) {
                $dateString = $date->format('Y-m-d');
                $totalUrlData[] = ['date' => $dateString, 'totalUrl' => 0];
                $totalVisitsData[] = ['date' => $dateString, 'totalVisits' => 0];
                $totalVisitsMicrositeData[] = ['date' => $dateString, 'totalVisitsMicrosite' => 0];
                $countMicrositeData[] = ['date' => $dateString, 'countMicrosite' => 0];
            }
        }

        return response()->json([
            'startDate' => $startDate,
            'user' => $user,
            'totalUrlData' => $totalUrlData,
            'totalVisitsData' => $totalVisitsData,
            'totalVisitsMicrositeData' => $totalVisitsMicrositeData,
            'countMicrositeData' => $countMicrositeData
        ]);
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
        ->whereRelation('shortURL', 'microsite_id', null)
        ->whereRelation('shortURL', 'archive', '!=', 'yes')
        ->count();

        $totalVisitsMicrosite = ShortURLVisit::query()
        ->whereRelation('shortURL', 'user_id', '=', $user)
        ->whereRelation('shortURL', 'microsite_id', '!=', null)
        ->count();

        $users = User::where('email', '!=', 'admin@gmail.com')->get();
        $count = [];
        foreach ($users as $user) {
            $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        }
        // Mengurutkan data berdasarkan jumlah pengunjung
        arsort($count);
        $qr = ShortUrl::get()->sum('qr_code');
        // find by id
        // bentuk array / collection
        // $shortURL = \AshAllenDesign\ShortURL\Models\ShortURL::find();

        // hitung jumlah array / collection dari shortURL
        // $visits = count($shortURL->visits) ;

        // dd($totalVisits,$countURL);
        return view('User.AnalyticUser', compact('totalVisits','countURL','count','users','links', 'dataLink', 'countMicrosite', 'qr', 'microsites','totalVisitsMicrosite'));
    }

}
