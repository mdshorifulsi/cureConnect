<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use File;
class BrandController extends Controller
{
    public function index()
    {

        $brand = Brand::latest()->get();
        return view('admin.brand.index', compact('brand'));


    }



    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'brand_name' => 'required|unique:brands',
                'brand_logo' => 'required',
            ],
            [
                'brand_name.required' => 'Brand name is required',
                'brand_logo.required' => 'Brand Logo is required',
            ]

        );

        $brand = new Brand;
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = Str::slug($request->brand_name);

        if ($request->hasFile('brand_logo')) {
            $file = $request->file('brand_logo');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $brand->brand_logo = $request->file('brand_logo')->move("images/brand_images", $name);
        }

        $brand->save();
        Toastr::success('Brand Add successfully :', 'success!');
        return redirect()->route('brand.index');


    }

    public function edit($id)
    {

        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));

    }


    public function update(Request $request, $id)
    {

        // $validated = $request->validate(
        //     [
        //         'brand_name' => 'required',
        //         'brand_logo' => 'required',
        //     ],
        //     [
        //         'brand_name.required' => 'Brand name is required',
        //         'brand_logo.required' => 'Brand Logo is required',
        //     ]

        // );

        $brand = Brand::find($id);

        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = Str::slug($request->brand_name);

        if ($request->hasFile('brand_logo')) {
            $file = $request->file('brand_logo');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $brand->brand_logo = $request->file('brand_logo')->move("images/brand_images", $name);
        }

        $brand->save();
        Toastr::success('Brand Update successfully :', 'success!');
        return redirect()->route('brand.index');


    }



    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (File::exists($brand->brand_logo)) {
            File::delete($brand->brand_logo);
        }

        $brand->delete();
        return redirect()->route('brand.index');


    }


    public function inactive($id)
    {

        Brand::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        Brand::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }

}
