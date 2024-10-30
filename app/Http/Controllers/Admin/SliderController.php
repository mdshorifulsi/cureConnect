<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use File;

class SliderController extends Controller
{
    public function index()
    {

        $slider = Slider::latest()->get();
        return view('admin.slider.index', compact('slider'));


    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'slider_title' => 'required',
            'slider_image' => 'required',
        ]);


        $slider = new Slider;
        $slider->slider_title = $request->slider_title;

        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $slider->slider_image = $request->file('slider_image')->move("images/slider_images", $name);
        }

        $slider->save();
        Toastr::success('Slider Add successfully :', 'success!');
        return redirect()->back();


    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));



    }


    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'slider_title' => 'required',
            'slider_image' => 'required',
        ]);

        $slider = Slider::find($id);
        $slider->slider_title = $request->slider_title;

        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $slider->slider_image = $request->file('slider_image')->move("images/category_images", $name);
        }
        $slider->save();
        Toastr::success('Slider Update successfully :', 'success!');
        return redirect()->route('slider.index');




    }



    public function destroy($id)
    {
        $slider = Slider::find($id);

        if (File::exists($slider->slider_image)) {
            File::delete($slider->slider_image);
        }

        $slider->delete();
        return redirect()->route('slider.index');


    }


    public function inactive($id)
    {

        Slider::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        Slider::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }

}
