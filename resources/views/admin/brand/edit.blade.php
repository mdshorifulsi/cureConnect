@extends('admin_layouts')
@section('admin_content')
@section('title','Brand')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card mt-3 mb-5">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                             Edit Brand

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('brand.update',$brand->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                                  <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control @error('brand_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Brand name">
                                  @error('brand_name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formFile"  class="form-label">Brand new Image</label>
                                    <input class="form-control @error('brand_logo') is-invalid @enderror" type="file" name="brand_logo" >
                                    @error('brand_logo')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror

                                    <label for="formFile"  class="form-label mt-3">Brand old Image</label><br>
                                    <img src="{{URL::to($brand->brand_logo)}}"style="width: 200px;height: 150px;">
                                    <input type="hidden" name="old_image" value="{{$brand->brand_logo}}">
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
