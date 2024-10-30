@php
    $bestOffer=App\Models\BestOffer::first();

    @endphp

@if($bestOffer->status==1)
<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="popup_content">
                            <div class="popup-text">
                                <div class="heading_s3 text-center">
                                    <h4>{{ $bestOffer->best_offer_title }}</h4>
                                </div>
                                <img src="{{asset ($bestOffer->best_offer_image) }}">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
@endif
