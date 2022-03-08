<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function index(){
        $data = ContactForm::all();
        return view('backend.pages.contacts',compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'message' => 'required'
        ]);

        ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message,
        ]);

        return back()->with('message','Thank You For Your Message');
    }
}
