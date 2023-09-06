<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Carbon\Carbon;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request as HttpRequest;

class LinkController extends Controller
{

    public function showLink($shortCode)
    {
        $user = auth()->user(); // Mengambil objek User saat ini
        $user_id = $user->id;
        $urlshort = ShortUrl::where('user_id', $user_id)->orderBy('created_at', 'desc')->paginate(5);
        return view('User.Link', compact('user','urlshort', 'shortCode'));
    }

    public function archive($id)
    {
        $link = ShortUrl::find($id);
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
