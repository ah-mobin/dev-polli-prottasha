<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Organogram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminManagementController extends Controller
{
    public function organogram(){
        $image = Organogram::findOrFail(1)->image;
        return view('backend.pages.management.organogram',compact('image'));
    }


    public function organogramUpdate(Request $request){
        $request->validate([
            'image' => 'required|mimes:png,jpeg,jpg,webp|max:1024'
        ]);

        $image = Organogram::findOrFail(1);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );

            $value = config('app.url').'/storage/'.$name;

            $image->image = $value;

            Gallery::create([
                'image' => $value
            ]);
        }

        $image->save();

        return back();
    }
}
