<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function Subscribe()
    {
        return view('SubscribeAdmin.index');
    }
    public function AddSubscribe()
    {
        return view('SubscribeAdmin.AddSubscribe');
    }
}
