<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCareerController extends Controller
{
    public function index(){
        $data = Career::get();
        return view('backend.pages.careers',compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpeg,jpg,webp|max:1024'
        ]);

        $data = new Career();
        $data->title = $request->title;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );

            $value = config('app.url').'/storage/'.$name;

            $data->image = $value;

            Gallery::create([
                'image' => $value
            ]);
        }

        $data->save();

        return back()->with('message','Data Updated');
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpeg,jpg,webp|max:1024'
        ]);

        $data = Career::findOrFail($id);
        $data->title = $request->title;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            Storage::putFileAs(
                'public', $request->file('image'),$name
            );

            $value = config('app.url').'/storage/'.$name;

            $data->image = $value;

            Gallery::create([
                'image' => $value
            ]);
        }

        $data->save();

        return back()->with('message','Data Updated');
    }

    public function delete($id){
        Career::whereId($id)->delete();
        return back();
    }
}
