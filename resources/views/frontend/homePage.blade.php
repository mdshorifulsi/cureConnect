@extends('layouts')
@section('content')
@section('title','Cure Connect')

@include('frontend/layouts/sliderSection')
@include('frontend/layouts/serviceSection')







    @include('frontend/layouts/categorySection')
    <!-- END SECTION CATEGORIES -->

    <!-- START SECTION SHOP -->

    <!-- END SECTION SHOP -->

    <!-- START SECTION BANNER -->

    <!-- END SECTION BANNER -->

    <!-- START SECTION SHOP -->

    <!-- END SECTION SHOP -->
    {{-- <div class="section small_pt pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s4 text-center">
                        <h2>Our Top Products</h2>
                    </div>
                    <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
                </div>
            </div>
            <div class="row shop_container">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img1.jpg')}}" alt="furniture_img1">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">enim expedita sed</a></h6>
                            <div class="product_price">
                                <span class="price">$45.00</span>
                                <del>$55.25</del>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="rating_num">(21)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img2.jpg')}}" alt="furniture_img2">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">adipisci officia libero</a></h6>
                            <div class="product_price">
                                <span class="price">$55.00</span>
                                <del>$95.00</del>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:68%"></div>
                                </div>
                                <span class="rating_num">(15)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img3.jpg')}}" alt="furniture_img3">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">Internet tend to repeat</a></h6>
                            <div class="product_price">
                                <span class="price">$68.00</span>
                                <del>$99.00</del>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:87%"></div>
                                </div>
                                <span class="rating_num">(25)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img4.jpg')}}" alt="furniture_img4">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">Many desktop publishing</a></h6>
                            <div class="product_price">
                                <span class="price">$69.00</span>
                                <del>$89.00</del>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:70%"></div>
                                </div>
                                <span class="rating_num">(22)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img5.jpg')}}" alt="furniture_img5">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">injected humour repetition</a></h6>
                            <div class="product_price">
                                <span class="price">$45.00</span>
                                <del>$55.25</del>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="rating_num">(21)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img6.jpg')}}" alt="furniture_img6">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">randomised humour words</a></h6>
                            <div class="product_price">
                                <span class="price">$55.00</span>
                                <del>$95.00</del>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:68%"></div>
                                </div>
                                <span class="rating_num">(15)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img7.jpg')}}" alt="furniture_img7">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">expedita distinctio rerum</a></h6>
                            <div class="product_price">
                                <span class="price">$68.00</span>
                                <del>$99.00</del>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:87%"></div>
                                </div>
                                <span class="rating_num">(25)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product_box text-center">
                        <div class="product_img">
                            <a href="shop-product-detail.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_img8.jpg')}}" alt="furniture_img8">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">Itaque earum rerum</a></h6>
                            <div class="product_price">
                                <span class="price">$69.00</span>
                                <del>$89.00</del>
                                <div class="on_sale">
                                    <span>20% Off</span>
                                </div>
                            </div>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:70%"></div>
                                </div>
                                <span class="rating_num">(22)</span>
                            </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn btn-fill-out btn-radius"><i class="icon-basket-loaded"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- START SECTION BLOG -->
    {{-- <div class="section small_pt pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heading_s1 text-center">
                        <h2>Latest News</h2>
                    </div>
                    <p class="leads text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style1 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_blog_img1.jpg')}}" alt="furniture_blog_img1">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">But I must explain to you how all this mistaken idea</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style1 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_blog_img2.jpg')}}" alt="furniture_blog_img2">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">On the other hand we provide denounce with righteous</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style1 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{asset('assets/frontend/assets/images/furniture_blog_img3.jpg')}}" alt="furniture_blog_img3">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so expensive?</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- END SECTION BLOG -->


    @include('frontend/layouts/brandSection')

    @endsection
