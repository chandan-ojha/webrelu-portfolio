<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $projects = Project::orderBy('created_at', 'DESC')->take(10)->get();
        return view('backend.dashboard.index',compact(['projects']));
    }
}
