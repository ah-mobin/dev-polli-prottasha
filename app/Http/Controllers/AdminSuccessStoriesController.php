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
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:1024',
            'link' => 'nullable'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );
        }


        SuccessStory::create([
            'image' => config('app.url').'/storage/'.$name,
            'link' => $request->link
        ]);

        Gallery::create([
            'image' => config('app.url').'/storage/'.$name,
        ]);

        return back();
    }

    public function delete($id){
        SuccessStory::whereId($id)->delete();

        return back();
    }
}
