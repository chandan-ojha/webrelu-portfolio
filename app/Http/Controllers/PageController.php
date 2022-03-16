<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $members = Member::all();
        return view('frontend.index',compact('members'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function portfolio(){
        return view('frontend.portfolio');
    }

    public function team(){
        $members = Member::all();
        return view('frontend.team',compact('members'));
    }

    public function service(){
        return view('frontend.service');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
