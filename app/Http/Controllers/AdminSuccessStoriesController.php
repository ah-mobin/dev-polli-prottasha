<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSuccessStoriesController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'image_one' => 'required|mimes:png,jpg,jpeg,webp|max:512',
            'image_two' => 'required|mimes:png,jpg,jpeg,webp|max:512',
        ]);

        if($request->hasFile('image_one')){
            $file = $request->file('image_one');
            $nameOne = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image_one'),$nameOne
            );
        }

        if($request->hasFile('image_two')){
            $file = $request->file('image_two');
            $nameTwo = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image_two'),$nameTwo
            );
        }

        SuccessStory::create([
            'image_one' => config('app.url').'/storage/'.$nameOne,
            'image_two' => config('app.url').'/storage/'.$nameTwo,
        ]);

        $arrs = [
            config('app.url').'/storage/'.$nameOne,
            config('app.url').'/storage/'.$nameTwo,
        ];

        foreach($arrs as $ar){
            Gallery::create([
                'image' => $ar
            ]);
        }

        return back()->with('message','Data Updated');
    }

    public function update(Request $request, $id){
        $request->validate([
            'image_one' => 'mimes:png,jpg,jpeg,webp|max:512',
            'image_two' => 'mimes:png,jpg,jpeg,webp|max:512',
        ]);

        $ss = SuccessStory::findOrFail($id);

        if($request->hasFile('image_one')){
            $file = $request->file('image_one');
            $nameOne = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image_one'),$nameOne
            );
            $ss->image_one = config('app.url').'/storage/'.$nameOne;
            $ss->save();
            Gallery::create([
                'image' => config('app.url').'/storage/'.$nameOne
            ]);
        }

        if($request->hasFile('image_two')){
            $file = $request->file('image_two');
            $nameTwo = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image_two'),$nameTwo
            );
            $ss->image_two = config('app.url').'/storage/'.$nameTwo;
            $ss->save();
            Gallery::create([
                'image' => config('app.url').'/storage/'.$nameTwo
            ]);
        }
        

        return back()->with('message','Data Updated');
    }

    public function delete($id){
        SuccessStory::whereId($id)->delete();

        return back()->with('message','Data Updated');
    }
}
