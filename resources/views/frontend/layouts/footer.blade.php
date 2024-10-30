    @php
        $setting=App\Models\Setting::first();
    @endphp


<footer class="footer_dark">

    <div class="middle_footer mb-4 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact_bottom_info">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style3 border-0 p-0">
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="icon_box_content mt-5">
                                        <h5>Location</h5>
                                        <p>{{ $setting->projectAddress}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style3 border-0 p-0">
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="icon_box_content mt-5">
                                        <h5>Email us</h5>
                                        <p><a href="mailto:info@sitename.com">{{ $setting->projectEmail }}</a> </br> <a href="mailto:bestwebcreator.com">bestwebcreator.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style3 border-0 p-0">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="icon_box_content mt-5">
                                        <h5>27/4 Online Support</h5>
                                        <p>Call for styling advice on </br> <a href="tell:+123 1234 5678">{{ $setting->projectPhone}}</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="bottom_footer bg_dark4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-start">© 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-md-end">
                        <li><a href="#"><img src="{{asset('assets/frontend/assets/images/visa.png')}}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{asset('assets/frontend/assets/images/discover.png')}}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{asset('assets/frontend/assets/images/master_card.png')}}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{asset('assets/frontend/assets/images/paypal.png')}}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{asset('assets/frontend/assets/images/amarican_express.png')}}" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
</footer>
