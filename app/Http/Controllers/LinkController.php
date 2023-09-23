<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Carbon\Carbon;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Http\Request as HttpRequest;

class LinkController extends Controller
{

    public function showLink($shortCode)
    {
        $user = auth()->user(); // Mengambil objek User saat ini
        $user_id = $user->id;
        $urlshort = ShortUrl::withCount('visits')
        // ->selectRaw('MONTH(created_at) as created_at')
        ->where('user_id', $user_id)
        ->whereNull('microsite_uuid')
        ->whereNull('deactivated_at')
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        $deactivatedUrls = ShortUrl::withCount('visits')
        ->where('user_id', $user_id)
        ->whereNotNull('deactivated_at')
        ->whereNull('microsite_uuid')
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        $result = [
            'labels' => DateHelper::getAllMonths(5),
            'series' => []
        ];

        $startDate = DateHelper::getSomeMonthsAgoFromNow(5)->format('Y-m-d H:i:s');
        $endDate = DateHelper::getCurrentTimestamp('Y-m-d H:i:s');

        $template = [0,0,0,0,0];

        foreach ($urlshort as $i => $data) {
            $parse = Carbon::parse($data->created_at);
            $date = $parse->shortMonthName . ' ' . $parse->year;
            $index = array_search($date, array_values($result['labels']));
            $visits = $template;
            $visits[4] = (int)$data->visits_count;
            $result['series'][$i] = $visits;
        }

        // dd($data);
        return view('User.Link', compact('user','urlshort', 'shortCode','result', 'deactivatedUrls'));
    }

    public function archive($id)
    {
        $link = ShortUrl::find($id);
        $link->update([
            'deactivated_at' => now(),
            'archive' => 'yes'
        ]);
        $link->delete();
        return redirect()->back()->with('success', 'Link telah diarsipkan');
    }

    public function updateDeactivated(HttpRequest $request, $keyTime)
    {
        $updateUrl = ShortUrl::where('url_key', $keyTime);

        if (!$updateUrl->exists()) {
            return response()->json(['error' => 'Short link not found'], 404);
        }

        // Memperbarui kolom deactivated_at
        $updateUrl->update([
            'deactivated_at' => $request->newTime,
        ]);

        // Mengirimkan respon ke JavaScript
        return response()->json(['message' => 'Deactivation status updated successfully']);
    }

    // public function LinkUsersChart()
    // {
    //     $user = Auth::user()->id;

    //     $startDate = Carbon::now()->subDays(7);

    //     $totalVisits = ShortURLVisit::query()
    //     ->whereRelation('shortURL', 'user_id', '=', $user)
    //     ->selectRaw('DATE(created_at) as date, COUNT(*) as totalVisits')
    //     ->groupBy('date')
    //     ->orderBy('date')
    //     ->get();

    //     return response()->json(compact('startDate', 'user','totalVisits'));
    // }

    public function LinkUsersChart(Request $request)
    {
        $urlKey= $request->id;
        // Ambil data link berdasarkan url_key
        $shortURL = ShortURL::where('url_key', $urlKey)->first();

        if (!$shortURL) {
            // Handle jika link tidak ditemukan
            return response()->json(['message' => 'Link not found'], 404);
        }

        $startDate = Carbon::now()->subDays(7);

        $totalVisits = ShortURLVisit::query()
            ->where('short_url_id', $shortURL->id) // Filter berdasarkan ID link
            ->selectRaw('DATE(created_at) as date, COUNT(*) as totalVisits')
            ->where('created_at', '>=', $startDate)
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return response()->json(compact('startDate', 'urlKey', 'totalVisits'));
    }
}
