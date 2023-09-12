<?php

namespace App\Http\Controllers;

use App\Models\Footer;

class LandingPageController extends Controller
{
    public function landingPage(){
        $data = Footer::first();
        return view('Landingpage.Home',compact('data'));
    }
    public function shortLink(){
        $data = Footer::first();
        return view('Landingpage.Shortlink', compact('data'));
    }
    public function micrositePage(){
        $data = Footer::first();
        return view('Landingpage.Microsite', compact('data'));
    }
    public function subscribePage(){
        $data = Footer::first();
        return view('Landingpage.Subscribe', compact('data'));
    }
    public function privacyPage(){
        $data = Footer::first();
        return view('HelpSupport.Privacy', compact('data'));
    }

}
