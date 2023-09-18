<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\Comment;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Support\Facades\Auth;

class DahsboardController extends Controller
{
    public function dashboardUser()
    {
        $user = Auth::user();

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
        $ShortLink = ShortUrl::all();
        $qr = ShortUrl::get()->sum('qr_code');
        // dd($qr);

        return view('User.DashboardUser',compact('ShortLink','countURL','totalVisits','countNameChanged', 'totalVisitsMicrosite', 'qr', 'countMIcrosite'));
    }
    public function HelpSupport() {
        $komentar = Comment::orderBy('created_at', 'desc')->get();
        // $user = User::all();
        $users = Auth::user();
        $userId = User::all();
        return view('HelpSupport.HelpSupport', compact('komentar','users', 'userId'));
    }
    public function Start (){
        return view('HelpSupport.Start');
    }
    public function Announcement (){
        return view('HelpSupport.Announcement');
    }
    public function Account (){
        return view('HelpSupport.Account');
    }
    public function BillingSubscriptions (){
        return view('HelpSupport.BillingSubscriptions');
    }
    public function PlatformMicrosite (){
        return view('HelpSupport.PlatformMicrosite');
    }
    public function ShortLink (){
        return view('HelpSupport.ShortLink');
    }
    public function home (){
        $komentar = Comment::orderBy('created_at', 'desc')->get();
        // $user = User::all();
        $users = Auth::user();
        $userId = User::all();
        return view('Landingpage.Home', compact('komentar','users', 'userId'));
    }
}
