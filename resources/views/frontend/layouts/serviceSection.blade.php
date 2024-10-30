<div class="section pt-0 small_pb mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cat_overlap radius_all_5">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="text-center text-md-start">
                                <h4>Our Big Service</h4>
                                {{-- <p class="mb-2">There are many variations of passages of Lorem</p> --}}
                                <a href="#" class="btn btn-line-fill btn-sm">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="{{ route('doctor.list') }}"  >
                                            {{-- <i class="flaticon-doctor"></i> --}}
                                            <i class="fas fa-user-md"></i>

                                            <span>Doctor </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                                            <i class="fa-solid fa-prescription"></i>
                                            <span>Prescription </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#callmodal">
                                            <i class="fa-duotone fa-solid fa-phone"></i>
                                            <span>Call To Order</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="{{ route('doctor.blood') }}">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span>Blood Bank</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="{{ route('doctor.ambulance') }}">
                                            <i class="fa-solid fa-truck-medical"></i>
                                            <span>Ambulance Service</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  <!-- Modal -->
<!-- Button trigger modal -->


<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('prescriptions.upload')}}" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                {{-- <label for="formFile" class="form-label">Upload Precription</label> --}}
                <input class="form-control" type="file" id="formFile" name="prescription_image">
              </div>
              <div class="d-inline">
                <button type="submit" class="btn btn-info  ">Upload Prescriptions</button>
              </div>
            </form>

        </div>

      </div>
    </div>
  </div>




  <!-- call to order Modal -->
  <div class="modal fade" id="callmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Contract us</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <h4> 01725588655</h4>
        </div>

      </div>
    </div>
  </div>
