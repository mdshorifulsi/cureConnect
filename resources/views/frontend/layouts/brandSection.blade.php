
@php

$brand=App\Models\Brand::get();
@endphp

<div class="section pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="heading_s4">
                    <a href="">
                 <h2>Our  Brand</h2>
                </a>
                    <hr>
                </div>
                {{-- <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @foreach($brand as $key => $v_brand)
                    <div class="item">
                        <div class="product_box text-center">
                            <a href="{{ route('brand_Product',$v_brand->id) }}">
                            <div class="product_img">




                                    <img src="{{asset ($v_brand->brand_logo) }}" alt="furniture_img1" style="height: 100px">


                            </div>
                            </a>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
