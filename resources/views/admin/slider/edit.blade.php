@extends('admin_layouts')
@section('admin_content')
@section('title','Slider')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card mt-3 mb-5">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                             Edit Slider

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Slider Title</label>
                                  <input type="text" name="slider_title" value="{{ $slider->slider_title }}" class="form-control @error('brand_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="slider name">
                                  @error('slider_title')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label for="formFile"  class="form-label">Slider new Image</label>
                                    <input class="form-control @error('slider_image') is-invalid @enderror" type="file" name="slider_image" >
                                    @error('slider_image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror

                                    <label for="formFile"  class="form-label mt-3">Slider old Image</label><br>
                                    <img src="{{URL::to($slider->slider_image)}}"style="width: 200px;height: 150px;">
                                    <input type="hidden" name="old_image" value="{{$slider->slider_image}}">

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
