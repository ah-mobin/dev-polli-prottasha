<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSettingsController extends Controller
{
    public function index(){
        $data = SiteSettings::findOrFail(1);
        return view('backend.settings',compact('data'));
    }


    public function siteNameUpdate(Request $request){
        $this->updateWithValidation($request, false, 'site_name');
        return back()->with('message','Data Updated');
    }

    public function siteNameBnUpdate(Request $request){
        $this->updateWithValidation($request, false, 'site_name_bn');
        return back()->with('message','Data Updated');
    }

    public function faviconUpdate(Request $request){
        $this->updateWithValidation($request, true, 'favicon');
        return back()->with('message','Data Updated');
    }

    public function logoUpdate(Request $request){
        $this->updateWithValidation($request, true, 'logo');
        return back()->with('message','Data Updated');
    }

    public function addressOneUpdate(Request $request){
        $this->updateWithValidation($request, false, 'physical_address_line_one');
        return back()->with('message','Data Updated');
    }

    public function addressTwoUpdate(Request $request){
        $this->updateWithValidation($request, false, 'physical_address_line_two');
        return back()->with('message','Data Updated');
    }

    public function emailUpdate(Request $request){
        $this->updateWithValidation($request, false, 'email_address');
        return back()->with('message','Data Updated');
    }

    public function phoneNumberUpdate(Request $request){
        $this->updateWithValidation($request, false, 'phone_number');
        return back()->with('message','Data Updated');
    }

    public function googleMapUpdate(Request $request){
        $this->updateWithValidation($request, false, 'google_map');
        return back()->with('message','Data Updated');
    }

    public function facebookPageUpdate(Request $request){
        $this->updateWithValidation($request, false, 'facebook_page');
        return back()->with('message','Data Updated');
    }

    public function copyrightTextUpdate(Request $request){
        $this->updateWithValidation($request, false, 'copyright_text');
        return back()->with('message','Data Updated');
    }

    private function updateWithValidation(Request $request, $isFile, $field): void
    {
        $request->validate([
            $field => 'nullable'
        ]);

        $value = $request->$field;

        if($isFile == true){
            $request->validate([
                $field => 'required|mimes:png,jpeg,jpg,webp|max:1024'
            ]);
            if($request->hasFile($field)){
                $file = $request->file($field);
                $name = $file->hashName();
                Storage::putFileAs(
                    'public', $request->file($field),$name
                );

                $value = config('app.url').'/storage/'.$name;

            }
            
        }

        $settings = SiteSettings::findOrFail(1);
        $settings->$field = $value;
        $settings->save();
    }
}
