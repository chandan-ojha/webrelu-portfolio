<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   //Contact Message index page
    public function index()
    {
        $messages = Contact::latest()->paginate(20);
        return view('backend.contact.index', compact('messages'));
    }

    //Contact Message show page
    public function show($id)
    {
        $message = Contact::find($id);

        if($message){
            return view('backend.contact.show', compact('message'));
        }else {

            Session::flash('error', 'Contact message not found.');
            return redirect()->route('dashboard');
        }
    }


    //Contact Message delete page
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if($contact){
            $contact->delete();

            Session::flash('success', 'Message deleted successfully');
        }

        return redirect()->back();
    }
}
