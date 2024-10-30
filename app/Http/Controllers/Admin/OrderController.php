<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Payment;
use Brian2694\Toastr\Facades\Toastr;
class OrderController extends Controller
{
    public function index()
    {

        $order = Order::latest()->get();
        $payment = Payment::latest()->get();
        $order_detail = Orderdetail::with('Order', 'payment', )->latest()->get();


        return view('admin.order.index', compact('order', 'payment', 'order_detail'));


    }
    // public function view($id)
    // {

    //     $order=Order::find($id);


    //     $payment = Payment::latest()->get();
    //     $order_detail = Orderdetail::with('Order', 'payment', )->latest()->get();


    //     return view('admin.order.index', compact('order', 'payment', 'order_detail'));


    // }


    public function pending($id)
    {

        Order::where('id', $id)
            ->update(['is_completed' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function done($id)
    {

        Order::where('id', $id)
            ->update(['is_completed' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }

}
