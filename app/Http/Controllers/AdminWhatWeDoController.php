<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminWhatWeDoController extends Controller
{
    public function index(){
        $data = WhatWeDo::get();
        return view('backend.pages.what_we_do',compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'nullable|mimes:png,jpeg,jpg,webp|max:1024'
        ]);

        $data = new WhatWeDo();
        $data->title = $request->title;
        $data->desc = $request->desc;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );

            $value = config('app.url').'/storage/'.$name;

            $data->image = $value;

            Gallery::create([
                'image' => $value,
            ]);
        }

        $data->save();

        return back()->with('message','Data Updated');
    }


    public function update(Request $request, $id){
        $request->validate([
            'image' => 'mimes:png,jpeg,jpg,webp|max:1024'
        ]);

        $data = WhatWeDo::findOrFail($id);
        $data->title = $request->title;
        $data->desc = $request->desc;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );

            $value = config('app.url').'/storage/'.$name;

            $data->image = $value;

            Gallery::create([
                'image' => $value,
            ]);
        }

        $data->save();

        return back()->with('message','Data Updated');
    }

    public function delete($id){
        WhatWeDo::whereId($id)->delete();
        return back()->with('message','Data Updated');
    }
}
