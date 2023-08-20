<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
   public function dashboardAdmin()
   {
    $totalUser = User::where('email', '!=', 'admin@gmail.com')->count();
    $totalUrl = ShortUrl::count();
    return view('Admin.index', compact('totalUser','totalUrl'));
   }
}
