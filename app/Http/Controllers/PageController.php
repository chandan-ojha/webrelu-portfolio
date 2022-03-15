<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function portfolio(){
        return view('frontend.portfolio');
    }

    public function team(){
        return view('frontend.team');
    }

    public function service(){
        return view('frontend.service');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
