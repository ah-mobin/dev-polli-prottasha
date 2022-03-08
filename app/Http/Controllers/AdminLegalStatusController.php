<?php

namespace App\Http\Controllers;

use App\Models\LegalStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminLegalStatusController extends Controller
{
    public function index(){
        $data = LegalStatus::get();
        return view('backend.pages.legal_status',compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'department_name' => 'required',
            'registration_date' => 'required'
        ]);
        LegalStatus::create([
            'department_name' => $request->department_name,
            'registration_link' => $request->registration_link,
            'registration_no' => $request->registration_no,
            'registration_date' => Carbon::make($request->registration_date)->format('d-m-Y'),
        ]);

        return back()->with('message','Data Updated');
    }

    public function update(Request $request, $id){
        $request->validate([
            'department_name' => 'required',
            'registration_date' => 'required'
        ]);

        $ls = LegalStatus::findOrFail($id);
        $ls->department_name = $request->department_name;
        $ls->registration_date = $request->registration_date;
        $ls->registration_link = $request->registration_link;
        $ls->registration_no = $request->registration_no;
        $ls->save();
        

        return back()->with('message','Data Updated');
    }

    public function delete($id){
        LegalStatus::whereId($id)->delete();

        return back()->with('message','Data Updated');
    }
}
