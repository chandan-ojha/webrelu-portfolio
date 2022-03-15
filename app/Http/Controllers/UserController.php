<?php

namespace App\Http\Controllers;

use App\Models\User;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //All users list page
    public function index()
    {
        $users = User::latest()->paginate(20);
        return view('backend.user.index', compact('users'));
    }

    
    // User Create Page
    public function create()
    {
        return view('backend.user.create');
    }

    
    //User information store in database
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'description' => $request->description,
        ]);

        Session::flash('success', 'User created successfully');
        return redirect()->back();
    }


   //User information edit page
    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

   //User infromation update
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'sometimes|nullable|min:8',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        Session::flash('success', 'User information updated successfully');
        return redirect()->back();
    }

   //User delete
   public function destroy(User $user)
    {
        if($user){
            $user->delete();
            Session::flash('success', 'User deleted successfully');
        }
        return redirect()->back(); 
    }
}
