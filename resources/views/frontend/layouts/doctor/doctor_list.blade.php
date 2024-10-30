@extends('layouts')
@section('content')
@section('title','Cure Connect')

@php
    $doctor=App\Models\Doctor::get();

@endphp

<div class="container mt-2">
    <h2 class=" text-decoration-underline ">Doctor List</h2>

</div>

<div class="section my-5">
	<div class="container">
    <div class="row">
        @foreach ( $doctor as  $v_doctor )
        <div class="col-6">

            <div class="row shop_container list">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product rounded-3">
                        <div class="product_img " style="height:200px">
                            <a href="shop-product-detail.html">
                                <img class="rounded mx-auto d-block" src="{{asset($v_doctor->doctor_image)}}" alt="product_img1">
                            </a>

                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="shop-product-detail.html">{{ $v_doctor->doctor_name }}</a></h6>
                                <h6 class="text-success text-decoration-underline">{{ $v_doctor->doctor_department }}</h6>
                            <div class="on_sale">
                                <h6 class="">{{ $v_doctor->Hospital }}</h6>
                            </div>
                            <br>
                            <div class="product_price">
                                <span>
                                    {{ $v_doctor->chamber_day }}
                                </span>
                                <br>
                                <span class="text-danger">

                                    From {{ $v_doctor->chamber_time }}
                                </span>
                                <span class="product_price">
                                    Contract {{ $v_doctor->doctor_assistent }}
                                </span>
                                <span class="product_price">
                                    <button class="btn btn-sm btn-warning float-center"><a href="{{route('doctor.appointment')}}">Appointment</a>
                                    </button>
                                </span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

        @endforeach


    </div>

</div>
<!-- END SECTION SHOP -->
</div>

@endsection
