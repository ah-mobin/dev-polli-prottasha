<?php

namespace App\Http\Controllers;

use App\Models\PageAbout;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class AdminAboutPageController extends Controller
{
    public function history(){
        $data = $this->instance()->history;
        return view('backend.pages.about.history',compact('data'));
    }

    public function historyUpdate(Request $request){
        $this->update($request, 'history');
        return back()->with('message','Data Updated');
    }

    public function mission(){
        $data = $this->instance()->mission;
        return view('backend.pages.about.mission',compact('data'));
    }

    public function missionUpdate(Request $request){
        $this->update($request, 'mission');
        return back()->with('message','Data Updated');;
    }

    public function vision(){
        $data = $this->instance()->vision;
        return view('backend.pages.about.vision',compact('data'));
    }

    public function visionUpdate(Request $request){
        $this->update($request, 'vision');
        return back()->with('message','Data Updated');;
    }


    private function instance(){
        return PageAbout::findOrFail(1);
    }

    private function update(Request $request, $field){
        $data = $this->instance();
        $data->$field = $request->$field;
        $data->save();
    }
}
