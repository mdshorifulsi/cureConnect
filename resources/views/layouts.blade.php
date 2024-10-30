<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title>@yield('title')</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/animate.css')}}">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/assets/bootstrap/css/bootstrap.min.css')}}">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/simple-line-icons.css')}}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{asset('assets/frontend/assets/owlcarousel/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/owlcarousel/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/owlcarousel/css/owl.theme.default.min.css')}}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/magnific-popup.css')}}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/slick-theme.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/responsive.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


 <!-- Toster -->
 <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>


<!-- END LOADER -->

<!-- Home Popup Section -->
@include('frontend/layouts/best_offer_modal')
@include('frontend/layouts/header')
<!-- End Screen Load Popup Section -->


@yield('content')
<!-- END MAIN CONTENT -->
@include('frontend/layouts/footer')
<!-- START FOOTER -->

<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Latest jQuery -->
<script src="{{asset('assets/frontend/assets/js/jquery-3.7.1.min.js')}}"></script>
<!-- popper min js -->
<script src="{{asset('assets/frontend/assets/js/popper.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{asset('assets/frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- owl-carousel min js  -->
<script src="{{asset('assets/frontend/assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- magnific-popup min js  -->
<script src="{{asset('assets/frontend/assets/js/magnific-popup.min.js')}}"></script>
<!-- waypoints min js  -->
<script src="{{asset('assets/frontend/assets/js/waypoints.min.js')}}"></script>
<!-- parallax js  -->
<script src="{{asset('assets/frontend/assets/js/parallax.js')}}"></script>
<!-- countdown js  -->
<script src="{{asset('assets/frontend/assets/js/jquery.countdown.min.js')}}"></script>
<!-- imagesloaded js -->
<script src="{{asset('assets/frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- isotope min js -->
<script src="{{asset('assets/frontend/assets/js/isotope.min.js')}}"></script>
<!-- jquery.dd.min js -->
<script src="{{asset('assets/frontend/assets/js/jquery.dd.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('assets/frontend/assets/js/slick.min.js')}}"></script>
<!-- elevatezoom js -->
<script src="{{asset('assets/frontend/assets/js/jquery.elevatezoom.js')}}"></script>
<!-- scripts js -->
<script src="{{asset('assets/frontend/assets/js/scripts.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Toastr --}}
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}


</body>
</html>
