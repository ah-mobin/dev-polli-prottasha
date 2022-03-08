<?php

namespace App\Http\Controllers;

use App\Models\WelcomeNote;
use Illuminate\Http\Request;

class AdminWelcomeNoteController extends Controller
{
    public function index(){
        $data = WelcomeNote::findOrFail(1);
        return view('backend.welcome_note',compact('data'));
    }


    public function titleUpdate(Request $request){
        $this->updateWithValidation($request, 'title');
        return back()->with('message','Data Updated');
    }

    public function noteUpdate(Request $request){
        $this->updateWithValidation($request, 'note');
        return back()->with('message','Data Updated');
    }



    private function updateWithValidation(Request $request,$field): void
    {
        $request->validate([
            $field => 'nullable'
        ]);

        $value = $request->$field;
        $settings = WelcomeNote::findOrFail(1);
        $settings->$field = $value;
        $settings->save();
    }
}
