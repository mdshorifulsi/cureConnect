@extends('layouts')
@section('content')
@section('title','Cure-connect')

<!-- END MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION SHIPPING INFO -->

    <!-- START SECTION SHOP -->
    <div class="section small_pt pb_20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s3 text-center">
                        <h2></h2>
                    </div>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row shop_container">
                @foreach ($brand_product as $row )
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            @if($row->discount>0)
                                <div class="badge bg-danger text-white position-absolute " style="top: 0.5rem; right: 0.5rem">
                                    {{ $row->discount }}
                                    @if($row->discount_type=='flat')
                                    TK off
                                    @else
                                    % off
                                    @endif
                                </div>
                                @else
                                @endif
                            <a href="shop-product-detail.html">
                                <img src="{{asset ($row->medicine_image) }}" alt="furniture_img1" style="height: 170px">
                            </a>

                        </div>
                        <div class="product_info float-left">

                            <h5 class="product_title"><a href="shop-product-detail.html"> {{ $row->medicine_name }} <p class="d-inline">{{ $row->power }} {{$row->power_type }}</p> </a></h5>

                            <span class="text-left" ><a href="shop-product-detail.html">{{ $row->generic_name }}</a></span>
                            <span class="text-left d-block text-decoration-underline" ><a href="shop-product-detail.html">{{ $row->brand->brand_name }}</a></span>
                            <hr>
                            <div class="product_price d-flex justify-content-around">
                                  <span class="price"> <i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$row->best_price }}</span>
                                 <del><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{ $row->unit_price }}Tk</del>
                            </div>


                            <div class="add-to-cart">
                                <a href="{{route('details',$row->id)}}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>

                        <hr>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION BANNER -->

    <!-- END SECTION CLIENT LOGO -->

    </div>
@endsection
