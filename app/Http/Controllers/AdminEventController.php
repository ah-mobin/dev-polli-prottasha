<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function index(){
        $data = Event::all();
        return view('backend.events',compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'link' => 'required'
        ]);

        Event::create([
            'title' => $request->title,
            'link' => $request->link
        ]);

        return back()->with('message','Data Updated');
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'link' => 'required'
        ]);

        Event::whereId($id)->update([
            'title' => $request->title,
            'link' => $request->link
        ]);

        return back()->with('message','Data Updated');
    }

    public function delete($id){
        Event::whereId($id)->delete();

        return back();
    }
}
