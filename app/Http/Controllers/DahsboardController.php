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

        $totalVisits = ShortURLVisit::query('user_id', $user)->count();
        if ($user) {
            $userId = $user->id;

            // Menghitung total kunjungan berdasarkan user ID
            $countURL = ShortURL::where('user_id', $userId)->count();
        }
        $ShortLink = ShortUrl::all();
        return view('User.DashboardUser',compact('ShortLink','countURL','totalVisits'));
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
