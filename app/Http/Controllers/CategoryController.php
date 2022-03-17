<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
  
    //Category index page
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(20);
        return view('backend.category.index', compact('categories'));
    }

    //Category Create page
    public function create()
    {
        return view('backend.category.create');
    }

    //Category information store
    public function store(Request $request)
    {
       // validation
       $this->validate($request, [
        'name' => 'required|unique:categories,name',
    ]);

    $category = Category::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name, '-'),
    ]);

    Session::flash('success', 'Category created successfully');

    return redirect()->back();
        
    }


    //Category information edit page
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    //Category information update
    public function update(Request $request, Category $category)
    {
        // validation
        $this->validate($request, [
            'name' => "required|unique:categories,name,$category->id",
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();

        Session::flash('success', 'Category updated successfully');
        return redirect()->back();
    }

    //Category delete
    public function destroy(Category $category)
    {
        if($category){
            $category->delete();

            Session::flash('success', 'Category deleted successfully');
            return redirect()->route('category.index');
        }
    }
}
