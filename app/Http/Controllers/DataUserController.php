<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function dataUser(){
        $data = User::all();
        return view('Admin.DataUserAdmin', compact('data'));
    }
}
