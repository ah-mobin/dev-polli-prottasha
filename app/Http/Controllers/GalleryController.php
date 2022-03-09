<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all();
        return view('backend.pages.gallery',compact('gallery'));
    }


    public function store(Request $request){
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:1024',
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

        return back()->with('message','Data Updated');
    }


    public function delete($id){
        Gallery::whereId($id)->delete();
        return back()->with('message','Data Updated');
    }
}
