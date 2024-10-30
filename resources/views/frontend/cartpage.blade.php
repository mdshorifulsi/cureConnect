@extends('layouts')
@section('content')
@section('title','Cure Connect')
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section mt-5">
        <div class="container">
            <h4 class="text-decoration-underline">Medicine Cart</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive shop_cart_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart )
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{asset($cart->product->medicine_image)}}" alt="product1"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">{{  $cart->product->medicine_name }}</a></td>
                                    <td class="product-price" data-title="Price">{{ $cart->price}}Tk</td>
                                    <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                        <form action="{{route ('cartUpdate',$cart->id) }}" method="post">
                                            @csrf
                                    <input type="number" name="qty" value="{{  $cart->qty}}" title="Qty" class="qty" size="4">
                                    <button type="submit"  class="btn btn-sm btn-primary">update</button>
                                        </form>
                                  </div></td>
                                      <td class="product-subtotal" data-title="Total">{{  $cart->price*$cart->qty}} Tk</td>
                                    <td class="product-remove" data-title="Remove"><a href="{{ route('cartDestroy',$cart->id) }}"><i class="ti-close"></i></a></td>
                                </tr>

                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="px-0">
                                        <div class="row g-0 align-items-center">
                                            @if(Session::has('coupon'))


                                            @else
                                            <form class="mb-30" action="{{route('couponApply')}}" method="post">
                                                @csrf
                                            <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                                <div class="coupon field_form input-group">
                                                    <input type="text" value=""  name="coupon_name" class="form-control form-control-sm" placeholder="Enter Coupon Code..">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                            @endif




                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                    <div class="medium_divider"></div>
                </div>
            </div>

            <form action="{{route('order.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
            <div class="row">
                <div class="col-md-6">
                    @php
                $payment=App\Models\Payment::get();
                @endphp
                    <div class="heading_s1 mb-3">
                        <h6>Payment</h6>
                    </div>
                    <form class="field_form shipping_calculator">
                        <div class="form-row">
                            <div class="form-group col-lg-12 mb-3">
                                <div class="custom_select">
                                    <select class="form-control" name="payment_id">
                                        <option selected>select Payment</option>
                                        @foreach($payment as $row)
                                        <option value="{{$row->id}}">{{$row->paymentName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Bill To</h5>
                        @if(Auth::user())
                        <div class="form-row">

                            <div class="form-group col-lg-12 mb-3">
                                <input required="required" value="{{Auth::user()->customer_name}}" name="customer_name" type="text" placeholder="customer_name" class="form-control" >

                            </div>
                            <div class="form-group col-lg-12 mb-3">
                                <input required="required" value="{{Auth::user()->phone_number}}" name="phone_number" type="text" placeholder="phone number" class="form-control" >

                            </div>
                            <div class="form-group col-lg-12 mb-3">
                                <input required="required" value="{{Auth::user()->address}}" name="address" type="text" placeholder="address" class="form-control" >

                            </div>

                        </div>
                        @else

                        <div class="form-row">

                            <div class="form-group col-lg-12 mb-3">
                                <input required="required" value="" name="customer_name" type="text" placeholder="customer_name" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12 mb-3">
                                <input required="required" value="" name="phone_number" type="text" placeholder="phone number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12 mb-3">
                                <input required="required" value="" name="address" type="text" placeholder="address" class="form-control" >
                            </div>

                        </div>

                        @endif


                    </form>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 p-md-4">
                        <div class="heading_s1 mb-3">
                            <h6>Cart Totals</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                @if(Session::has('coupon'))
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">Cart Subtotal</td>
                                        <td class="cart_total_amount">{{ $subtotal}} Tk</td>
                                        <input type="hidden" value="{{ $subtotal}}" name="subtotal">
                                    </tr>

                                    <td class="cart_total_label">Coupon code</td>
                                        <td class="cart_total_amount"><strong>{{Session()->get('coupon')['coupon_name']}}</strong>
                                            <td class="product-remove" data-title="Remove"><a href="{{route('coupon_remove')}}"><i class="ti-close"></i></a></td>
                                        </td>
                                    <tr>
                                        <td class="cart_total_label">Discount</td>
                                        @if(Session()->get('coupon')['discount_type']=='percent')
                                        <td class="cart_total_amount">{{Session()->get('coupon')['discount']}} %  =
                                            {{ $discount= $subtotal*Session()->get('coupon')['discount']/100
                                          }}  Tk</td>
                                          <input type="hidden" value="{{ $discount}}" name="discount">
                                        @else
                                        <td class="cart_total_amount"> {{Session()->get('coupon')['discount']}} Tk
                                            {{ $discount= Session()->get('coupon')['discount']}}
                                            <input type="hidden" value="{{ $discount}}" name="discount"></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Total</td>
                                        <td class="cart_total_amount"><strong>{{$total=$subtotal-Session()->get('coupon')['discount']}} Taka</h5>
                                            <input type="hidden" value="{{  $total}}" name="total"></strong></td>
                                    </tr>
                                </tbody>

                                @else

                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">Cart Subtotal</td>
                                        <td class="cart_total_amount">{{$subtotal}} Tk</td>
                                        <input type="hidden" value="{{$subtotal}}" name="subtotal">
                                    </tr>

                                    <tr>
                                        <td class="cart_total_label">Total</td>
                                        <td class="cart_total_amount"><strong>{{$total=$subtotal-0}} Tk</strong></td>
                                        <input type="hidden" value="{{$total}}" name="total">
                                    </tr>
                                </tbody>

                                @endif
                            </table>
                        </div>
                        <button type="submit" class=" btn btn-fill-out btn btn-block font-weight-bold my-3 py-3">Place order </button>
                        {{-- <a href="#" type="submit" class="btn btn-fill-out">Place order </a>
                    </div> --}}
                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>

@endsection
