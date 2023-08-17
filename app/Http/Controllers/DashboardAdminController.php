<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
   public function dashboardAdmin()
   {
    $jumlahuser = User::count();
    return view('Admin.index', compact('jumlahuser'));
   }
}
