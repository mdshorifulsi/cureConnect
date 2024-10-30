<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Brian2694\Toastr\Facades\Toastr;
class CartController extends Controller
{
    public function addtocart(Request $request, $id)
    {
        // echo $request->ip();
        // die();

        $check = Cart::where('product_id', $id)->where('customer_ip', $request->ip())->first();
        if ($check) {
            Cart::where('product_id', $id)->increment('qty');
            return redirect()->route('homePage')->with('success', 'product Add to cart');
        } else {
            Cart::insert([
                'product_id' => $id,
                'medicine_name' => $request->medicine_name,
                'qty' => $request->qty,
                'price' => $request->price,
                'customer_ip' => $request->ip(),

            ]);

            Toastr::success('Add medicine successfully :', 'success!');
            return redirect()->route('homePage')->with('success', 'product Add to cart');

        }


    }

    public function cartpage()
    {

        $carts = Cart::where('customer_ip', request()->ip())->latest()->get();

        $subtotal = Cart::all()->where('customer_ip', request()->ip())->sum(
            function ($t) {
                return $t->price * $t->qty;

            }
        );
        return view('frontend.cartpage', compact('carts', 'subtotal'));
    }

    public function cartDestroy($id)
    {

        Cart::where('id', $id)->where('customer_ip', request()->ip())->delete();
        Toastr::Error(' medicine Cancel  :', 'success!');
        return redirect()->back();

    }

    public function cartUpdate(Request $request, $id)
    {
        Cart::where('id', $id)->where('customer_ip', request()->ip())->update([

            'qty' => $request->qty,
        ]);
        return redirect()->back();
    }


}
