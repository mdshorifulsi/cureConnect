@php
    $total=App\Models\Cart::all()->where('customer_ip',request()->ip())->sum(
        function($t){
            return $t->price*$t->qty;
        });
        $quantity = App\Models\Cart::all()->where('customer_ip', request()->ip())->sum('qty')
@endphp

@php
    $setting=App\Models\Setting::first();

    @endphp

<header class="header_wrap " >

    <div class="middle-header dark_skin " >
        <div class="container ">
            <div class="nav_block ">
                <a class="navbar-brand" href="{{ route('homePage') }}">
                    {{-- <img class="logo_light" src="{{asset('assets/frontend/assets/images/logo_light.png')}}" alt="logo"> --}}
                    <img class="logo_dark" src="{{ asset($setting->logo) }}" alt="logo" style="width: 100px; height:50px">
                </a>
                <div class="product_search_form radius_input search_form_btn"  >
                    <form action="{{route('search.result')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="search" id="search" name="search" class="form-control" placeholder="Search for products" aria-label="Search" aria-describedby="search-addon"/>
                            {{-- <input type="search" id="search" name="search" class="form-control" placeholder="Search Product..." aria-label="Search" aria-describedby="search-addon"/> --}}
                            <button type="submit" class="search_btn3"><i class="fas fa-search"></i></button>
                        </div>

                        <div id="search-results" style="position: fixed; width: 37%; background: white; z-index: 1000; top:95px">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    {{-- <li><a href="{{  route('cart')}}" class="nav-link"><i class="linearicons-user"></i></a></li> --}}
                    {{-- <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count"> </span></a></li> --}}
                    @if (Auth::user())
                   <a href="{{ route('home') }}" <strong  class="border border-danger rounded p-2">
                    {{ Auth::user()->name }} </strong></a>

                    @else
                    @endif
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown"><i class="linearicons-user"></i></span></a>
                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @if (Auth::user())
                                <li>
                                    <a href="{{ route('home') }}" class="btn  btn-warning d-block p-5">profile</a>
                                </li>
                                <li class="login">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <strong class="btn  btn-danger d-block ">  {{ __('Logout') }}</strong>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </li>
                                @else

                                <li>
                                    <a href="{{ route('register') }}" class="btn  btn-danger d-block p-4">Register</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="btn  btn-danger d-block p-4">Login</a>
                                </li>

                                @endif

                            </ul>

                        </div>
                    </li>


                        <li>
                            <a href="{{  route('cart')}}" class="nav-link">
                                <i class="linearicons-bag2"></i>
                                <span class="cart_count"> {{ $quantity  }}</span>
                                <span class="amount"><span class="currency_symbol"></span>
                                 {{ $total }}
                                 <i class="fa-duotone fa-solid fa-bangladeshi-taka-sign"></i>
                                </span>
                            </a>
                        </li>

                </ul>
            </div>
        </div>
    </div>

    @php
    $category=App\Models\Category::where('status',1)->get();

    @endphp


    <div class="bottom_header dark_skin main_menu_uppercase border-top" >
        <div class="container " >
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    <div class="categories_wrap">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn categories_menu">
                            <span>All Categories </span><i class="linearicons-menu"></i>
                        </button>
                        <div id="navCatContent" class="navbar nav collapse">
                            <ul>
                                @foreach ( $category as $v_category )


                                <li><a class="dropdown-item nav-link nav_item" href="{{route ('category_Product',$v_category->id) }}"> <span>{{ $v_category->cat_name }}</span></a></li>
                                @endforeach

                            </ul>
                            {{-- <div class="more_categories">More Categories</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:;" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            {{-- <ul class="navbar-nav">
                                <li class="dropdown">
                                    <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle active" href="#">Home</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="index.html">Fashion 1</a></li>

                                        </ul>
                                    </div>
                                </li>

                                <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li>
                            </ul> --}}
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>{{ $setting->projectPhone }}</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


{{-- <script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            let query = $(this).val();

            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: { query: query },
                    success: function(data) {


                        let searchResults = $('#search-results');
                        searchResults.empty();

                        if (data.length > 0) {
                            $.each(data, function(index, product) {
                                searchResults.append(`
                                <a href="{{ url('product-show') }}/${product.id}" style="text-decoration: none;">
                                <div class="search-item" style="padding: 10px; border-bottom: 1px solid #ccc;">
                                    <img src="${product.medicine_image}" style="width: 50px; height: 50px;" alt="${product.medicine_name}">
                                    <span><a href="{{ url('product-show') }}/${product.id}" style="text-decoration: none;">${product.medicine_name}</a></span>
                                    <span><a href="{{ url('product-show') }}/${product.id}" style="text-decoration: none;">${product.best_price} Taka</a></span>
                                </div>
                                </a>
                            `);
                            });
                        } else {
                            searchResults.append('<div class="search-item" style="padding: 10px;">No results found</div>');
                        }
                    }
                });
            } else {
                $('#search-results').empty();
            }
        });
    });
</script> --}}



<script>
    $(document).ready(function() {
        // Show search results when typing
        $('#search').on('keyup', function() {
            let query = $(this).val();

            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: { query: query },
                    success: function(data) {
                        let searchResults = $('#search-results');
                        searchResults.empty();

                        if (data.length > 0) {
                            $.each(data, function(index, product) {
                                searchResults.append(`
                                <a href="{{ url('product-show') }}/${product.id}" style="text-decoration: none;">
                                    <div class="search-item" style="padding: 10px; border-bottom: 1px solid #ccc;">
                                        <img src="${product.medicine_image}" style="width: 50px; height: 50px;" alt="${product.medicine_name}">
                                        <span>${product.medicine_name}</span>
                                        <p class="d-inline-block">${product.power} ${product.power_type}</p>
                                        <span><i class="fa-solid fa-bangladeshi-taka-sign"></i> ${product.best_price}</span>
                                    </div>
                                </a>
                            `);
                            });
                        } else {
                            searchResults.append('<div class="search-item" style="padding: 10px;">No results found</div>');
                        }
                    }
                });
            } else {
                $('#search-results').empty();
            }
        });

        // Hide the search results if clicked outside of the search input or results div
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#search, #search-results').length) {
                $('#search-results').empty(); // Clear search results if clicked outside
            }
        });

        // Optionally, re-show the results when focusing back on the input
        $('#search').on('focus', function() {
            // You can fetch the previous results here or leave it blank if you want
        });
    });
</script>
