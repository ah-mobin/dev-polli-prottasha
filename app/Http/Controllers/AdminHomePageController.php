<?php

namespace App\Http\Controllers;

use App\Models\DocumentaryYtLink;
use App\Models\Gallery;
use App\Models\HomeSectionOne;
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
        $secOne = HomeSectionOne::findorFail(1);
        $threes = HomeSectionThree::latest()->get();
        return view('backend.pages.home',compact('sliders','stories','videos','secOne','threes'));
    }


    public function secOneContentOne(Request $request){
        HomeSectionOne::whereId(1)->update([
            'item_one' => $request->item_one
        ]);

        return back()->with('message','Data Updated');
    }

    public function secOneContentTwo(Request $request){
        HomeSectionOne::whereId(1)->update([
            'item_two' => $request->item_two
        ]);

        return back()->with('message','Data Updated');
    }

    public function secOneContentThree(Request $request){
        HomeSectionOne::whereId(1)->update([
            'item_three' => $request->item_three
        ]);

        return back()->with('message','Data Updated');
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

            $value = config('app.url').'/storage/'.$name;
            
            Gallery::create([
                'image' => $value
            ]);
        }

        HomeSectionThree::create([
            'title' => $request->title,
            'image' => $value,
        ]);

        return back()->with('message','Data Updated');
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

            Gallery::create([
                'image' => config('app.url').'/storage/'.$name
            ]);
        }
        $data->save();

        return back()->with('message','Data Updated');
    }

    public function secThreeDelete($id){
        HomeSectionThree::whereId($id)->delete();
        return back()->with('message','Data Updated');
    }
}
