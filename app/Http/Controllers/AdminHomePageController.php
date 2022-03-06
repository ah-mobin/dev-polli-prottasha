<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\SuccessStory;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    public function home(){
        $sliders = Slider::latest()->get();
        $stories = SuccessStory::latest()->get();
        return view('backend.pages.home',compact('sliders','stories'));
    }
}
