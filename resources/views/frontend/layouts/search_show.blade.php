@extends('layouts')
@section('content')
@section('title','Cure Connect')

<div class="section mt-4">
	<div class="container">
		<div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
              <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img" src="{{asset ($product->medicine_image) }}"  alt="product_img1" />
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 class="product_title"><a href="#">{{$product->medicine_name  }}</a></h4>
                        <h6 class="text-decoration-underline"><a href="#">Generic name: {{$product->generic_name  }}</a></h6>
                        <div class="product_price">
                            <span class="price"><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$product->best_price  }}</span>
                            <del><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$product->unit_price  }}</del>
                            @if($product->discount>0)
                            <div class="on_sale">

                                <span> {{ $product->discount }}
                                    @if($product->discount_type=='flat')
                                    TK off
                                    @else
                                    % off
                                    @endif
                                </span>
                            </div>

                            @else
                            @endif
                        </div>

                    </div>
                    <hr />

                    <form action="{{route('addtocart',$product->id) }}" method="POST">
                        @csrf
                    <input type="hidden" name="price" value="{{$product->best_price }}" />
                    <input type="hidden" name="medicine_name" value="{{$product->medicine_name }}" />
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">

                                <input type="number" name="qty" value="1" title="Qty" class="qty" size="4">

                            </div>
                        </div>

                        <div class="cart_btn">
                            <button class="btn btn-fill-out btn-addtocart" type="submit">
                                <i class="icon-basket-loaded"></i> Add to cart</button>
                        </div>
                    </div>
                    </form>


                    <hr />
                    <ul class="product-meta">
                        <li>Brand: <a href="{{ route('brand_Product',$product->id) }}">{{ $product->brand->brand_name }}</a></li>
                        <li>Category: <a href="#">{{ $product->category->cat_name }}</a></li>
                        <li>expire date: <a href="#">{{ $product->expire_date }}</a></li>

                    </ul>


                </div>
            </div>
        </div>

</div>
@endsection
