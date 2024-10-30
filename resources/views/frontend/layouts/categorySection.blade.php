
@php
$first_category=App\Models\Category::skip(0)->first();
$v_cat_firsts=App\Models\Product::where('category_id',$first_category->id)->get();
@endphp

<div class="section pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="heading_s4">
                    <h3 class="bg-danger d-inline-block text-white px-5 py-1 rounded-4">{{ $first_category->cat_name }}</h3>
                    <h6 class=" d-inline-block float-end mt-2 mx-3 text-decoration-underline"><a href="{{route ('category_Product',$first_category->id) }}">See All  </a></h6>
                    <hr>
                </div>
                {{-- <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @foreach($v_cat_firsts as $key => $v_cat_firsts)
                    <div class="item">
                        <div class="product_box text-center">
                            <div class="product_img">
                                @if($v_cat_firsts->discount>0)
                                <div class="badge bg-danger text-white position-absolute " style="top: 0.5rem; right: 0.5rem">
                                    {{ $v_cat_firsts->discount }}
                                    @if($v_cat_firsts->discount_type=='flat')
                                    TK off
                                    @else
                                    % off
                                    @endif
                                </div>
                                @else
                                @endif

                                <a href="shop-product-detail.html">
                                    <img src="{{asset ($v_cat_firsts->medicine_image) }}" alt="furniture_img1" style="height: 170px">
                                </a>

                            </div>
                            <div class="product_info float-left">

                                <h5 class="product_title"><a href="shop-product-detail.html"> {{ $v_cat_firsts->medicine_name }} <p class="d-inline">{{ $v_cat_firsts->power }} {{$v_cat_firsts->power_type }}</p> </a></h5>

                                <span class="text-left" ><a href="shop-product-detail.html">{{ $v_cat_firsts->generic_name }}</a></span>
                                <span class="text-left d-block text-decoration-underline" ><a href="shop-product-detail.html">{{ $v_cat_firsts->brand->brand_name }}</a></span>
                                <hr>
                                <div class="product_price d-flex justify-content-around">
                                      <span class="price"> <i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$v_cat_firsts->best_price }}</span>
                                     <del><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{ $v_cat_firsts->unit_price }}Tk</del>
                                </div>


                                <div class="add-to-cart">
                                    <a href="{{route('details',$v_cat_firsts->id)}}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
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


{{--
2nd category --}}



@php
$second_category=App\Models\Category::skip(1)->first();
$v_cat_seconds=App\Models\Product::where('category_id',$second_category->id)->get();
@endphp

<div class="section pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="heading_s4">
                    <h3 class="bg-danger d-inline-block text-white px-5 py-1 rounded-4">{{ $second_category->cat_name }}</h3>
                    <h6 class=" d-inline-block float-end mt-2 mx-3 text-decoration-underline"><a href="{{route ('category_Product',$second_category->id) }}">See All  </a></h6>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @foreach($v_cat_seconds as $key => $v_cat_seconds)
                    <div class="item">
                        <div class="product_box text-center">
                            <div class="product_img">
                                @if($v_cat_seconds->discount>0)
                                <div class="badge bg-danger text-white position-absolute " style="top: 0.5rem; right: 0.5rem">
                                    {{ $v_cat_seconds->discount }}
                                    @if($v_cat_seconds->discount_type=='flat')
                                    TK off
                                    @else
                                    % off
                                    @endif
                                </div>
                                @else
                                @endif

                                <a href="shop-product-detail.html">
                                    <img src="{{asset ($v_cat_seconds->medicine_image) }}" alt="furniture_img1" style="height: 170px">
                                </a>

                            </div>
                            <div class="product_info float-left">

                                <h5 class="product_title"><a href="shop-product-detail.html"> {{ $v_cat_seconds->medicine_name }} <p class="d-inline">{{ $v_cat_seconds->power }} {{$v_cat_seconds->power_type }}</p> </a></h5>

                                <span class="text-left" ><a href="shop-product-detail.html">{{ $v_cat_seconds->generic_name }}</a></span>
                                <span class="text-left d-block text-decoration-underline" ><a href="shop-product-detail.html">{{ $v_cat_seconds->brand->brand_name }}</a></span>
                                <hr>
                                <div class="product_price d-flex justify-content-around">
                                      <span class="price"> <i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$v_cat_seconds->best_price }}</span>
                                     <del><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{ $v_cat_seconds->unit_price }}Tk</del>
                                </div>


                                <div class="add-to-cart">
                                    <a href="{{route('details',$v_cat_seconds->id)}}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
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




{{--3nd category --}}



@php
$third_category=App\Models\Category::skip(2)->first();
$v_cat_thirds=App\Models\Product::where('category_id',$third_category->id)->get();
@endphp

<div class="section pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="heading_s4">
                    <h3 class="bg-danger d-inline-block text-white px-5 py-1 rounded-4">{{ $third_category->cat_name }}</h3>
                    <h6 class=" d-inline-block float-end mt-2 mx-3 text-decoration-underline"><a href="{{route ('category_Product',$third_category->id) }}">See All  </a></h6>
                    <hr>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @foreach($v_cat_thirds as $key => $v_cat_thirds)
                    <div class="item">
                        <div class="product_box text-center">
                            <div class="product_img">
                                @if($v_cat_thirds->discount>0)
                                <div class="badge bg-danger text-white position-absolute " style="top: 0.5rem; right: 0.5rem">
                                    {{ $v_cat_thirds->discount }}
                                    @if($v_cat_thirds->discount_type=='flat')
                                    TK off
                                    @else
                                    % off
                                    @endif
                                </div>
                                @else
                                @endif

                                <a href="shop-product-detail.html">
                                    <img src="{{asset ($v_cat_thirds->medicine_image) }}" alt="furniture_img1" style="height: 170px">
                                </a>

                            </div>
                            <div class="product_info float-left">

                                <h5 class="product_title"><a href="shop-product-detail.html"> {{ $v_cat_thirds->medicine_name }} <p class="d-inline">{{ $v_cat_thirds->power }} {{$v_cat_thirds->power_type }}</p> </a></h5>

                                <span class="text-left" ><a href="shop-product-detail.html">{{ $v_cat_thirds->generic_name }}</a></span>
                                <span class="text-left d-block text-decoration-underline" ><a href="shop-product-detail.html">{{ $v_cat_thirds->brand->brand_name }}</a></span>
                                <hr>
                                <div class="product_price d-flex justify-content-around">
                                      <span class="price"> <i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$v_cat_thirds->best_price }}</span>
                                     <del><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{ $v_cat_thirds->unit_price }}Tk</del>
                                </div>


                                <div class="add-to-cart">
                                    <a href="{{route('details',$v_cat_thirds->id)}}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
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



{{--4nd category --}}



@php
$four_category=App\Models\Category::skip(3)->first();
$v_cat_fours=App\Models\Product::where('category_id',$four_category->id)->get();
@endphp

<div class="section pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="heading_s4">
                    <h3 class="bg-danger d-inline-block text-white px-5 py-1 rounded-4">{{ $four_category->cat_name }}</h3>
                    <h6 class=" d-inline-block float-end mt-2 mx-3 text-decoration-underline"><a href="{{route ('category_Product',$four_category->id) }}">See All  </a></h6>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @foreach($v_cat_fours as $key => $v_cat_fours)
                    <div class="item">
                        <div class="product_box text-center">
                            <div class="product_img">
                                @if($v_cat_fours->discount>0)
                                <div class="badge bg-danger text-white position-absolute " style="top: 0.5rem; right: 0.5rem">
                                    {{ $v_cat_fours->discount }}
                                    @if($v_cat_fours->discount_type=='flat')
                                    TK off
                                    @else
                                    % off
                                    @endif
                                </div>
                                @else
                                @endif

                                <a href="shop-product-detail.html">
                                    <img src="{{asset ($v_cat_fours->medicine_image) }}" alt="furniture_img1" style="height: 170px">
                                </a>

                            </div>
                            <div class="product_info float-left">

                                <h5 class="product_title"><a href="shop-product-detail.html"> {{ $v_cat_fours->medicine_name }} <p class="d-inline">{{ $v_cat_fours->power }} {{$v_cat_fours->power_type }}</p> </a></h5>

                                <span class="text-left" ><a href="shop-product-detail.html">{{ $v_cat_fours->generic_name }}</a></span>
                                <span class="text-left d-block text-decoration-underline" ><a href="shop-product-detail.html">{{ $v_cat_fours->brand->brand_name }}</a></span>
                                <hr>
                                <div class="product_price d-flex justify-content-around">
                                      <span class="price"> <i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{$v_cat_fours->best_price }}</span>
                                     <del><i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i> {{ $v_cat_fours->unit_price }}Tk</del>
                                </div>


                                <div class="add-to-cart">
                                    <a href="{{route('details',$v_cat_fours->id)}}" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
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


