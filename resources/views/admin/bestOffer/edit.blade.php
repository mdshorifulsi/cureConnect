@extends('admin_layouts')
@section('admin_content')
@section('title','bestOffer')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row justify-content-center">


                <div class="col-md-8">
                    <div class="card mt-3 mb-5">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                             Edit bestOffer


                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('bestOffer.update',$bestOffer->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                  <label for="exampleInputEmail1" class="form-label">best Offer Title</label>
                                  <input type="text" name="best_offer_title" value="{{ $bestOffer->best_offer_title }}" class="form-control @error('best_offer_title') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="best offer title">

                                  @error('best_offer_title')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror

                                </div>
                                <div class="form-group">
                                    <label for="formFile"  class="form-label">bestOffer new Image</label>
                                    <input class="form-control @error('best_offer_image') is-invalid @enderror" type="file" name="best_offer_image" >

                                    @error('best_offer_image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror

                                    <label for="formFile"  class="form-label mt-3">bestOffer old Image</label><br>
                                    <img src="{{URL::to($bestOffer->best_offer_image)}}"style="width: 200px;height: 150px;">
                                    <input type="hidden" name="old_image" value="{{$bestOffer->best_offer_image}}">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
                              </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

</div>

@endsection
