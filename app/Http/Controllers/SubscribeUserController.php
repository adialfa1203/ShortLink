<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeUserController extends Controller
{
    public function subscribeUser()
    {

        return view('User.SubscribeUser');
    }

    public function subscribeProductUser()
    {

        return view('User.SubscribeProductUser');
    }
}
