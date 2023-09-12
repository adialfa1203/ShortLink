<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeUserController extends Controller
{
    public function subscribeUser()
    {
        $data = Subscribe::paginate(5);
        return view('User.SubscribeUser', compact('data'));
    }

    public function subscribeProductUser()
    {

        return view('User.SubscribeProductUser');
    }
}
