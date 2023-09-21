<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\Comment;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Footer;

class DahsboardController extends Controller
{
    public function dashboardUser()
    {
        $user = Auth::user();
        $currentMonth = Carbon::now()->month;

        if ($user) {
            $userId = $user->id;
            $totalVisits = ShortURLVisit::query()
            ->whereRelation('shortURL', 'user_id', '=', $userId)
            ->whereRelation('shortURL', 'microsite_uuid', null)
            ->whereRelation('shortURL', 'archive', '!=', 'yes')
            ->count();
        } if($user) {
            $userId = $user->id;
            $totalVisitsMicrosite = ShortURLVisit::query()
            ->whereRelation('shortURL', 'user_id', '=', $userId)
            ->whereRelation('shortURL', 'microsite_uuid', '!=', null)
            ->count();
        } if ($user) {
            $userId = $user->id;
        $countURL = ShortURL::where('user_id', $userId)
                            ->whereNull('microsite_uuid')
                            ->where('archive', '!=', 0)
                            ->count();
        } if ($user) {
            $userId = $user->id;
        $countMIcrosite = ShortURL::where('user_id', $userId)
                            ->whereNotNull('microsite_uuid')
                            ->count();
        }if($user) {
            $userId = $user->id;
        $countNameChanged = ShortUrl::where('user_id', $userId)
                                    ->where('custom_name', 'yes')
                                    ->whereNull('microsite_uuid')
                                    ->count();
        }
        $qr = ShortUrl::get()->sum('qr_code');

        return view('User.DashboardUser', compact( 'countURL', 'totalVisits', 'countNameChanged', 'totalVisitsMicrosite', 'qr', 'countMIcrosite'));
    }

    public function HelpSupport()
    {
        $komentar = Comment::orderBy('created_at', 'desc')->get();
        $data = Footer::first();
        // $user = User::all();
        $users = Auth::user();
        $userId = User::all();
        return view('HelpSupport.HelpSupport', compact('komentar','users', 'userId','data'));
    }
    public function Start (){
        $data = Footer::first();
        return view('HelpSupport.Start', compact('data'));
    }
    public function Announcement (){
        $data = Footer::first();
        return view('HelpSupport.Announcement', compact('data'));
    }
    public function Account (){
        $data = Footer::first();
        return view('HelpSupport.Account', compact('data'));
    }
    public function BillingSubscriptions (){
        $data = Footer::first();
        return view('HelpSupport.BillingSubscriptions', compact('data'));
    }
    public function PlatformMicrosite (){
        $data = Footer::first();
        return view('HelpSupport.PlatformMicrosite', compact('data'));
    }
    public function ShortLink (){
        $data = Footer::first();
        return view('HelpSupport.ShortLink', compact('data'));
    }
    public function home (){
        $data = Footer::first();
        $komentar = Comment::orderBy('created_at', 'desc')->get();
        $url = ShortUrl::whereNotNull('default_short_url')->count();
        $micrositeuuid = ShortUrl::whereNotNull('microsite_uuid')->count();
        // $user = User::all();
        $users = Auth::user();
        $userId = User::all();
        dd($url);
        return view('Landingpage.Home', compact('komentar','users', 'userId','data','url','micrositeuuid'));
    }
}
