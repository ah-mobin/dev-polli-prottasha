<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNoticeController extends Controller
{
    public function index(){
        $data = Notice::latest()->get();
        return view('backend.notices',compact('data'));
    }

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
                'image' => config('app.url').'/storage/'.$name
            ]);
        }


        Notice::create([
            'image' => config('app.url').'/storage/'.$name,
            'link' => $request->link
        ]);

        return back()->with('message','Data Updated');
    }

    public function delete($id){
        Notice::whereId($id)->delete();

        return back()->with('message','Data Updated');
    }
}
