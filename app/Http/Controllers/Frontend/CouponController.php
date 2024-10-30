<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Session;

class CouponController extends Controller
{
    public function couponApply(Request $request)
    {
        $check = Coupon::where('coupon_name', $request->coupon_name)->first();
        if ($check) {
            Session::put('coupon', [
                'coupon_name' => $check->coupon_name,
                'discount' => $check->discount,
                'discount_type' => $check->discount_type,
            ]);
            Toastr::success('Coupon Apply successfully:', 'success');
            return redirect()->back();
        } else {

            Toastr::error('Invalid coupon:', 'Invalid');
            return redirect()->back();

        }
    }


    public function coupon_remove()
    {

        if (Session::has('coupon')) {
            Session()->forget('coupon');
            Toastr::error('Discount coupon Remove:', 'Removed');
            return redirect()->back();
        }
    }
}
