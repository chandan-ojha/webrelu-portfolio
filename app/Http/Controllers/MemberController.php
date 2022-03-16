<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Session;
use Illuminate\Http\Request;

class MemberController extends Controller
{
  
    //Members list page
    public function index()
    {
        $members = Member::latest()->paginate(20);
        return view('backend.member.index', compact('members'));
    }

   //Member create
    public function create()
    {
        return view('backend.member.create');
    }


   //Member information store
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'designation' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedIn' => 'required',
            
        ]);

        $member = Member::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedIn' => $request->linkedIn,
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/team/', $image_new_name);
            $member->image = '/storage/team/' . $image_new_name;
            $member->save();
        }

        Session::flash('success', 'Member created successfully');
        return redirect()->back();
    }

 
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

 
    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
        
    }
}
