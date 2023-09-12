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
        return view('Landingpage.Shortlink');
    }
    public function micrositePage(){
        return view('Landingpage.Microsite');
    }
    public function subscribePage(){
        return view('Landingpage.Subscribe');
    }
    public function privacyPage(){
        return view('HelpSupport.Privacy');
    }
    
}
