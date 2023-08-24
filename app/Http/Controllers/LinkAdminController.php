<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Http\Request;

class LinkAdminController extends Controller
{
    public function linkAdmin()
    {
        $totalUser = User::where('email', '!=', 'admin@gmail.com')->count();
        $totalUrl = ShortUrl::count();
        $totalVisits = ShortURLVisit::query()->count();
        return view('Admin.LinkAdmin',compact('totalUser','totalUrl','totalVisits'));
    }
}
