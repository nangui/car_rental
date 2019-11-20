<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting = Setting::find(1);
        $setting->email = $request->email;
        $setting->site_name = $request->site_name;
        $setting->site_phone = $request->site_phone;
        $setting->site_slogan = $request->site_slogan;
        $setting->site_copyright = $request->site_copyright;
        $setting->site_facebook = $request->site_facebook;
        $setting->site_twitter = $request->site_twitter;
        $setting->site_linkedin = $request->site_linkedin;
        $setting->site_latitude = $request->site_latitude;
        $setting->site_longitude = $request->site_longitude;
        $setting->site_address = $request->site_address;
        $setting->save();
        return redirect()->back();
    }
}
