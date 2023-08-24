<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function viewButton(){
        return view('Button.ViewButton');
    }

    public function createButton(){
        return view ('Button.CreateButton');
    }
}
