<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use Illuminate\Http\Request;

class AdminSettingsController extends Controller
{
    public function index(){
        $data = SiteSettings::findOrFail(1);
        return view('backend.settings',compact('data'));
    }


    public function siteNameUpdate(Request $request){
        $this->updateWithValidation($request, 'site_name' ,$request->site_name);
        return back();
    }

    public function siteNameBnUpdate(Request $request){
        $this->updateWithValidation($request, 'site_name' ,$request->site_name);
        return back();
    }

    public function faviconUpdate(Request $request){
        
    }

    public function logoUpdate(Request $request){
        
    }

    public function addressOneUpdate(Request $request){
        
    }

    public function addressTwoUpdate(Request $request){
        
    }

    public function emailUpdate(Request $request){
        
    }

    public function phoneNumberUpdate(Request $request){
        
    }

    public function googleMapUpdate(Request $request){
        
    }

    public function facebookPageUpdate(Request $request){
        
    }

    private function updateWithValidation(Request $request, $field, $value): void
    {
        $request->validate([
            $field => 'required'
        ]);

        $settings = SiteSettings::findOrFail(1);
        $settings->$field = $value;
        $settings->save();
    }
}
