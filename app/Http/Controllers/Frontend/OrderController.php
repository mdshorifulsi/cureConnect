<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Shipping;
use App\Models\Payment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Session;
use Auth;

class OrderController extends Controller
{
    public function order_store(Request $request)
    {

        $order_id = Order::insertGetId([

            'user_id' => Auth::id(),
            'customer_ip' => request()->ip(),
            // 'payment_id' => $request->payment_id,
            'customer_name' => $request->customer_name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'invoice_no' => mt_rand(10000000, 999999999),
            'subtotal' => $request->subtotal,
            'coupon_discount' => $request->discount,
            'total' => $request->total,
            'date' => date('Y-m-d H:i:s'),




        ]);



        $carts = Cart::where('customer_ip', request()->ip())->latest()->get();

        foreach ($carts as $cart) {

            Orderdetail::insert([
                'order_id' => $order_id,
                'product_id' => $cart->product_id,
                'payment_id' => $request->payment_id,
                'product_qty' => $cart->qty,
                'medicine_name' => $cart->medicine_name,




            ]);
        }



        if (Session::has('coupon')) {
            Session()->forget('coupon');
        }

        Cart::where('customer_ip', request()->ip())->delete();

        Toastr::success('Your Order successfully done', 'Order Complate');
        return redirect()->route('homePage');


    }
}
