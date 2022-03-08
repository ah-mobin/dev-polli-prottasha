<?php

namespace App\Http\Controllers;

use App\Models\DocumentaryYtLink;
use Illuminate\Http\Request;

class AdminYtDocumentaryController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'yt_vide_id' => 'required|unique:documentary_yt_links,yt_vide_id'
        ]);

        DocumentaryYtLink::create([
            'title' => $request->title,
            'yt_vide_id' => $request->yt_vide_id
        ]);

        return back()->with('message','Data Updated');
    }


    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'yt_vide_id' => 'required|unique:documentary_yt_links,yt_vide_id,'.$id,
        ]);

        DocumentaryYtLink::whereId($id)->update([
            'title' => $request->title,
            'yt_vide_id' => $request->yt_vide_id
        ]);

        return back()->with('message','Data Updated');
    }


    public function delete($id){
        DocumentaryYtLink::whereId($id)->delete();
        return back()->with('message','Data Updated');
    }
}
