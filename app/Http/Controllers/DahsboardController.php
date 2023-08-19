<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class DahsboardController extends Controller
{
    public function dashboard()
    {
        $ShortLink = ShortUrl::all();
        return view('User.DashboardUser',compact('ShortLink'));
    }
}
