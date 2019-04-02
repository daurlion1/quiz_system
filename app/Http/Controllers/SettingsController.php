<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Session;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index')->with('settings', Setting::all());
    }

    public function edit($id)
    {
        return view('admin.settings.edit')->with('setting', Setting::findOrFail($id));
    }

    public function update($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->title = $request->title;
        $setting->phone = $request->phone;
        $setting->site_name = $request->site_name;
        $setting->copyright = $request->copyright;
        $setting->address = $request->address;
        $setting->email = $request->email;
        $setting->save();

        Session::flash('success', 'Setting updated');
        return redirect()->route('settings.index');
    }
}
