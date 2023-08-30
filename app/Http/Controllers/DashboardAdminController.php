<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ShortUrl;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;


class DashboardAdminController extends Controller
{
    public function dashboardChart()
    {
        $startDate = Carbon::now()->subDays(7);

        $totalUser = User::where('created_at', '>=', $startDate)
            ->where('email', '!=', 'admin@gmail.com')
            ->selectRaw('DATE(created_at) as date, COUNT(*) as totalUser')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $totalUrl = ShortUrl::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as totalUrl')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $totalVisits = ShortURLVisit::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as totalVisits')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return response()->json(compact('startDate', 'totalUser', 'totalUrl', 'totalVisits'));
    }

    public function dashboardAdmin(){
        $totalUser = User::where('email', '!=', 'admin@gmail.com')->count();
        $totalUrl = ShortUrl::count();
        $totalVisits = ShortURLVisit::query()->count();

    return view('Admin.index', compact('totalUser','totalUrl','totalVisits'));
    }
}
