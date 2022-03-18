<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $projects = Project::orderBy('created_at', 'DESC')->take(10)->get();
        $projectCount = Project::all()->count();
        $categoryCount = Category::all()->count();
        $memberCount = Member::all()->count();
        return view('backend.dashboard.index',compact(['projects','projectCount','categoryCount','memberCount']));
    }
}
