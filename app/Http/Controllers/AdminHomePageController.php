<?php

namespace App\Http\Controllers;

use App\Models\DocumentaryYtLink;
use App\Models\Slider;
use App\Models\SuccessStory;
use App\Models\HomeSectionThree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHomePageController extends Controller
{
    public function home(){
        $sliders = Slider::latest()->get();
        $stories = SuccessStory::latest()->get();
        $videos = DocumentaryYtLink::latest()->get();
        $threes = HomeSectionThree::latest()->get();
        return view('backend.pages.home',compact('sliders','stories','videos','threes'));
    }


    public function secThreeStore(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,webp|max:1024'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );
        }

        HomeSectionThree::create([
            'title' => $request->title,
            'image' => config('app.url').'/storage/'.$name,
        ]);

        return back();
    }

    public function secThreeUpdate(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,webp|max:1024'
        ]);

        $data = HomeSectionThree::findOrFail($id);
        $data->title = $request->title;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );
            $data->image = config('app.url').'/storage/'.$name;
        }
        $data->save();

        return back();
    }

    public function secThreeDelete($id){
        HomeSectionThree::whereId($id)->delete();
        return back();
    }
}
