<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Support\Facades\Auth;

class DahsboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $totalVisits = ShortURLVisit::query('user_id', $user)->count();
        if ($user) {
            $userId = $user->id;
            
            // Menghitung total kunjungan berdasarkan user ID
            $countURL = ShortURL::where('user_id', $userId)->count();
        } 
        $ShortLink = ShortUrl::all();
        return view('User.DashboardUser',compact('ShortLink','totalVisits','countURL'));
    }

    public function HelpSupport (){
        return view('HelpSupport.HelpSupport');
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
}
