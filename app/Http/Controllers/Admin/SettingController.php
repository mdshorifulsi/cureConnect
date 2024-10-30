<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use File;

class SettingController extends Controller
{
    public function index()
    {
        // $category=Category::first();

        $setting = DB::table('settings')->first();
        return view('admin.setting.index', compact('setting'));

    }

    public function update(Request $request, $id)
    {

        $setting = Setting::find($id);
        $setting->projectName = $request->projectName;
        $setting->projectEmail = $request->projectEmail;
        $setting->projectPhone = $request->projectPhone;
        $setting->projectAddress = $request->projectAddress;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $setting->logo = $request->file('logo')->move("images/setting", $name);
        }


        $setting->save();
        Toastr::success('Setting successfully updated:', 'update!');
        return redirect()->route('setting.index');

    }
}
