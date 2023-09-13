<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Footer;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            ->where('archive', '!=', 'yes')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $totalVisits = ShortURLVisit::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as totalVisits')
            ->whereRelation('shortURL', 'archive', '!=', 'yes')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return response()->json(compact('startDate', 'totalUser', 'totalUrl', 'totalVisits'));
    }

    public function dashboardAdmin(){
        $totalUser = User::where('email', '!=', 'admin@gmail.com')
                    ->where('is_banned', '!=', '0')
                    ->count();
        $totalUrl = ShortUrl::where('archive', '!=', 'yes')->count();
        $totalVisits = ShortURLVisit::query()
                        ->whereRelation('shortURL', 'archive', '!=', 'yes')
                        ->count();

    return view('Admin.index', compact('totalUser','totalUrl','totalVisits'));
    }

    public function viewFooter(){
        $data = Footer::first();
        return view('Admin.Footer', compact('data'));
    }

    public function editFooter(Request $request)
    {
        $footer = Footer::first();
        $validator = Validator::make($request->all(), [
            'description' => 'string|max:225',
            'whatsapp' => 'string|integer',
            'instagram' => 'string',
            'twitter' => 'string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($request->hasFile('logo')) {
            $oldProfilePicture = $footer->logo;
            if ($oldProfilePicture) {
                $oldProfilePath = public_path('logos/' . $oldProfilePicture);
                if (file_exists($oldProfilePath)) {
                    unlink($oldProfilePath);
                }
            }

            $oldProfilePicture = $request->file('logo')->move(public_path('logos'), $footer->id . '.jpg');
            $footer->logo = 'logos/' . $footer->id . '.jpg';
        }

        $footer->description = $request->description;
        $footer->whatsapp = $request->whatsapp;
        $footer->instagram = $request->instagram;
        $footer->twitter = $request->twitter;
        $footer->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

}
