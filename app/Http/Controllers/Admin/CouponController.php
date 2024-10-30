<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Coupon;
use Str;

class CouponController extends Controller
{

    public function index()
    {

        $coupon = Coupon::latest()->get();
        return view('admin.coupon.index', compact('coupon'));


    }



    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'coupon_name' => 'required|unique:brands',
                'discount' => 'required',
                'discount_type' => 'required|integer',
            ],
            [
                'coupon_name.required' => 'Coupon name is required',
                'discount.required' => 'Discount is required',
                'discount_type.required' => 'Discount type is required',
            ]

        );

        $coupon = new Coupon;
        $coupon->coupon_name = $request->coupon_name;
        $coupon->discount = $request->discount;
        $coupon->discount_type = $request->discount_type;




        $coupon->save();
        Toastr::success('coupon Add successfully :', 'success!');
        return redirect()->route('coupon.index');


    }

    public function edit($id)
    {

        $coupon = Coupon::find($id);
        return view('admin.coupon.edit', compact('coupon'));

    }


    public function update(Request $request, $id)
    {



        $coupon = Coupon::find($id);

        $coupon->coupon_name = $request->coupon_name;
        $coupon->discount = $request->discount;
        $coupon->discount_type = $request->discount_type;

        $coupon->save();
        Toastr::success('coupon Update successfully :', 'success!');
        return redirect()->route('coupon.index');


    }



    public function destroy($id)
    {
        $coupon = Coupon::find($id);


        $coupon->delete();
        return redirect()->route('coupon.index');


    }


    public function inactive($id)
    {

        Coupon::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        Coupon::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }

}
