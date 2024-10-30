@extends('layouts')
@section('content')
@section('title','Cure Connect')

<div class="section mt-4">
	<div class="container">
		<div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
              <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img" src="{{asset ($details->medicine_image) }}"  alt="product_img1" />
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 class="product_title"><a href="#">{{$details->medicine_name  }}</a></h4>
                        <h6 class="text-decoration-underline"><a href="#">Generic name: {{$details->generic_name  }}</a></h6>
                        <div class="product_price">
                            <span class="price"><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$details->best_price  }}</span>
                            <del><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$details->unit_price  }}</del>
                            @if($details->discount>0)
                            <div class="on_sale">

                                <span> {{ $details->discount }}
                                    @if($details->discount_type=='flat')
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

                    <form action="{{route('addtocart',$details->id) }}" method="POST">
                        @csrf
                    <input type="hidden" name="price" value="{{$details->best_price }}" />
                    <input type="hidden" name="medicine_name" value="{{$details->medicine_name }}" />
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
                        <li>Brand: <a href="{{ route('brand_Product',$details->id) }}">{{ $details->brand->brand_name }}</a></li>
                        <li>Category: <a href="#">{{ $details->category->cat_name }}</a></li>
                        <li>expire date: <a href="#">{{ $details->expire_date }}</a></li>

                    </ul>


                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="large_divider clearfix"></div>
            </div>
        </div>

        <div class="row">
        	<div class="col-12">
            	<div class="small_divider"></div>
            	<div class="divider"></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="heading_s1">
                	<h3>Releted Products</h3>
                </div>
            	<div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                	@foreach ($relatedProduct as $relatedProduct )
                    <div class="item">
                        <div class="product">
                            <div class="product_img">
                                @if($relatedProduct->discount>0)
                                <div class="badge bg-danger text-white position-absolute " style=" top: 0.5rem; right: 0.5rem ;">
                                    {{ $relatedProduct->discount }}
                                    @if($relatedProduct->discount_type=='flat')
                                    TK off
                                    @else
                                    % off
                                    @endif
                                </div>
                                @else
                                @endif
                                <a href="shop-product-detail.html">
                                    <img src="{{asset ($relatedProduct->medicine_image) }}" alt="product_img1" style="height:170px">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="{{route('details',$relatedProduct->id)}}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">{{ $relatedProduct->medicine_name }}</a></h6>
                                <h6 class=""><a href="shop-product-detail.html">{{ $relatedProduct->generic_name }}</a></h6>
                                <hr>
                                <div class="product_price">
                                    <span class="price">{{ $relatedProduct->best_price }}</span>
                                    <del>{{ $relatedProduct->unit_price }}</del>

                                </div>



                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
