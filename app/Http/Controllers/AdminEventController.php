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
}
