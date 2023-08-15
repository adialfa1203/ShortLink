<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkAdminController extends Controller
{
    public function LinkAdmin()
    {
        return view('LinkAdmin.LinkAdmin');
    }
}
