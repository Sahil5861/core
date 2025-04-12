<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;




class SettingController extends Controller
{
    public function settings()
    {
        $this->data['settings'] = Setting::where('id',1)->first();
        return view('admin.setting',$this->data);
    }

  


    public function updateSettings(Request $request){
        $request->validate([
            "email" => 'required',
            "mobile" => 'required',
            "address" => 'required',
            "twitter" => 'required',
            "facebook" => 'required',
            "linkedin" => 'required',
            "instagram" => 'required',
        ]);
        
        $settings = Setting::firstwhere('id', 1);
        if ($request->hasFile('logo_image')) {
            $path = public_path('images/settings');
            if ( ! file_exists($path) ) {
                mkdir($path, 0777, true);
            }
            $file = $request->file('logo_image');
            $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
            $this->image = $fileName;
            $file->move($path, $fileName);
            $image = $this->image;
        }else{
            $image = $settings->logo_image;
        }

        $settings->email = $request->email;
        $settings->mobile = $request->mobile;
        $settings->logo_image = $image;
        $settings->address = $request->address;
        $settings->twitter = $request->twitter;
        $settings->facebook = $request->facebook;
        $settings->linkedin = $request->linkedin;
        $settings->instagram = $request->instagram;
        if($settings->save()){                
            return back()->with('message','Settings updated successfully');
        }else{
            return back()->with('message','Settings not updated successfully');
        }
            
       
        
    }

}
