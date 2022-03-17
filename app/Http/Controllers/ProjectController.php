<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
 
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(20);
        return view('backend.project.index', compact('projects'));
        
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('backend.project.create', compact(['categories']));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:projects,title',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required',
        ]);

        $project = Project::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'project_link' => $request->project_link,
            'category_id' => $request->category,
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/project/', $image_new_name);
            $project->image = '/storage/project/' . $image_new_name;
            $project->save();
        }

        Session::flash('success', 'Project created successfully');
        return redirect()->back();
        
    }

  
    public function show(Project $project)
    {
        return view('backend.project.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('backend.project.edit', compact(['project', 'categories']));
    }

  
    public function update(Request $request, Project $project)
    {
        $this->validate($request, [
            'title' => "required|unique:projects,title, $project->id",
            'category' => 'required',
        ]);

        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->short_description = $request->short_description;
        $project->project_link= $request->project_link;
        $project->category_id = $request->category;
        

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/project/', $image_new_name);
            $project->image = '/storage/project/' . $image_new_name;
        }

        $project->save();

        Session::flash('success', 'Project updated successfully');
        return redirect()->back();
    }

    
    public function destroy(Project $project)
    {
        if($project){
            if(file_exists(public_path($project->image))){
                unlink(public_path($project->image));
            }

            $project->delete();
            Session::flash('Project deleted successfully');
        }

        return redirect()->back();
    }
}
