@extends('layouts')
@section('content')
@section('title','Cure Connect')

<div class="section">
	<div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center order_complete">
                	<i class="fas fa-check-circle"></i>
                    <div class="heading_s1">
                  	<h3>Your appointment is completed!</h3>
                    </div>
                  	{{-- <p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p> --}}
                    <a href="{{ route('homePage') }}" class="btn btn-fill-out">Continue Cure Connect</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
