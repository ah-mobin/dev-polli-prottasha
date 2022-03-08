<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSliderController extends Controller
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

            Gallery::create([
                'image' => config('app.url').'/storage/'.$name,
            ]);
        }


        Slider::create([
            'image' => config('app.url').'/storage/'.$name,
            'link' => $request->link
        ]);

        return back();
    }

    public function delete($id){
        Slider::whereId($id)->delete();

        return back();
    }
}
