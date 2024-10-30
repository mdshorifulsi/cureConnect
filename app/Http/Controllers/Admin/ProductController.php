<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Admin;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use DB;
use File;
class ProductController extends Controller
{
    public function index()
    {


        $category = Category::latest()->get();
        $brand = Brand::latest()->get();
        $product = Product::with('category', 'brand', )->latest()->get();

        return view('admin.product.index', compact('category', 'brand', 'product'));




    }

    public function create()
    {
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();

        return view('admin.product.create', compact('category', 'brand'));

    }




    public function store(Request $request)
    {


        $validated = $request->validate(
            [
                'medicine_name' => 'required',
                'generic_name' => 'required',
                'category_id' => 'required|integer',
                'subcategory_id' => 'required|integer',
                'brand_id' => 'required|integer',
                'unit_price' => 'required',
                'medicine_type' => 'required|integer',
                'power' => 'required',
                'power_type' => 'required|integer',
                'medicine_unit' => 'required',
                'discount' => 'required',
                'discount_type' => 'required|integer',
                'stock_quantity' => 'required',
                'medicine_image' => 'required',
                'manufacture_date' => 'required',
                'expire_date' => 'required',



            ],
            [
                'medicine_name.required' => 'Medicine name is required',
                'generic_name.required' => 'Medicine generic name is required',
                'category_id.required' => 'Category name is required',
                'brand_id.required' => 'Brand name is required',
                'unit_price.required' => 'Unit price is required',
                'medicine_type.required' => 'Medicine Type is required',
                'power.required' => 'power is required',
                'power_type.required' => 'Power Type is required',
                'medicine_unit.required' => 'Medicine unit is required',
                'discount.required' => 'Discount is required',
                'discount_type.required' => 'Discount type is required',
                'stock_quantity.required' => 'Stock quantity  is required',
                'medicine_image.required' => 'Medicine Image name is required',
                'manufacture_date.required' => 'Manufacture date is required',
                'expire_date.required' => 'Expire date is required',
            ]

        );

        $product = new Product;
        $product->medicine_name = $request->medicine_name;
        $product->generic_name = $request->generic_name;
        $product->medicine_type = $request->medicine_type;
        $product->power = $request->power;
        $product->power_type = $request->power_type;
        $product->medicine_unit = $request->medicine_unit;
        $product->unit_price = $request->unit_price;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;
        $product->stock_quantity = $request->stock_quantity;
        $product->description = $request->description;
        $product->manufacture_date = $request->manufacture_date;
        $product->expire_date = $request->expire_date;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->medicine_unit = $request->medicine_unit;
        $product->admin_id = \Auth::guard('admin')->user()->id;

        if ($request->discount_type == 'flat') {

            $product->best_price = ($request->unit_price * $request->medicine_unit) - $request->discount;

        } else {

            $product->best_price = (($request->unit_price) - (($request->unit_price * $request->discount) / 100)) * ($request->medicine_unit);

        }





        if ($request->hasFile('medicine_image')) {
            $file = $request->file('medicine_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $product->medicine_image = $request->file('medicine_image')->move("images/medicine_images", $name);
        }

        // dd($product);
        $product->save();

        Toastr::success('medicine Add successfully :', 'success!');
        return redirect()->route('product.index');




    }

    public function edit($id)
    {
        $category = Category::latest()->get();

        $brand = Brand::latest()->get();
        $product = Product::find($id);
        return view('admin.product.edit', compact('category', 'brand', 'product'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'medicine_name' => 'required',
                'generic_name' => 'required',
                'category_id' => 'required|integer',
                'subcategory_id' => 'required|integer',
                'brand_id' => 'required|integer',
                'unit_price' => 'required',
                'medicine_type' => 'required|integer',
                'power' => 'required',
                'power_type' => 'required|integer',
                'medicine_unit' => 'required',
                'discount' => 'required',
                'discount_type' => 'required|integer',
                'stock_quantity' => 'required',
                'medicine_image' => 'required',
                'manufacture_date' => 'required',
                'expire_date' => 'required',



            ],
            [
                'medicine_name.required' => 'Medicine name is required',
                'generic_name.required' => 'Medicine generic name is required',
                'category_id.required' => 'Category name is required',
                'brand_id.required' => 'Brand name is required',
                'unit_price.required' => 'Unit price is required',
                'medicine_type.required' => 'Medicine Type is required',
                'power.required' => 'power is required',
                'power_type.required' => 'Power Type is required',
                'medicine_unit.required' => 'Medicine unit is required',
                'discount.required' => 'Discount is required',
                'discount_type.required' => 'Discount type is required',
                'stock_quantity.required' => 'Stock quantity  is required',
                'medicine_image.required' => 'Medicine Image name is required',
                'manufacture_date.required' => 'Manufacture date is required',
                'expire_date.required' => 'Expire date is required',
            ]

        );

        $product = Product::find($id);


        $product = new Product;
        $product->medicine_name = $request->medicine_name;
        $product->generic_name = $request->generic_name;
        $product->medicine_type = $request->medicine_type;
        $product->power = $request->power;
        $product->power_type = $request->power_type;
        $product->medicine_unit = $request->medicine_unit;
        $product->unit_price = $request->unit_price;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;
        $product->stock_quantity = $request->stock_quantity;
        $product->description = $request->description;
        $product->manufacture_date = $request->manufacture_date;
        $product->expire_date = $request->expire_date;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->medicine_unit = $request->medicine_unit;
        $product->admin_id = \Auth::guard('admin')->user()->id;

        if ($request->discount_type == 'flat') {

            $product->best_price = ($request->unit_price * $request->medicine_unit) - $request->discount;

        } else {

            $product->best_price = (($request->unit_price) - (($request->unit_price * $request->discount) / 100)) * ($request->medicine_unit);

        }





        if ($request->hasFile('medicine_image')) {
            $file = $request->file('medicine_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $product->medicine_image = $request->file('medicine_image')->move("images/medicine_images", $name);
        }

        // dd($product);
        $product->save();

        Toastr::success('medicine update successfully :', 'success!');
        return redirect()->route('product.index');



    }



    public function destroy($id)
    {
        $product = Product::find($id);
        if (File::exists($product->thumbnail_image)) {
            File::delete($product->thumbnail_image);
        }
        $product->delete();
        return redirect()->route('product.index');


    }


    public function inactive($id)
    {

        Product::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        Product::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }



    // json data return
    public function getSubcategory($category_id)
    {
        $subcategory = DB::table('sub_categories')->where('category_id', $category_id)->get();
        return response()->json($subcategory);

    }



}
