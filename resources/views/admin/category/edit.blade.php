@extends('admin_layouts')
@section('admin_content')
@section('title','Category')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card mt-3 mb-5">

                        <div class="card-body">
                            <form method="POST" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                  <input type="text" name="cat_name" value="{{ $category->cat_name }}" class="form-control @error('cat_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Category name">
                                  @error('cat_name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formFile"  class="form-label">category new Image</label>
                                    <input class="form-control @error('cat_image') is-invalid @enderror" type="file" name="cat_image" >
                                    @error('cat_image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <label for="formFile"  class="form-label mt-3">Category old Image</label><br>
                                    <img src="{{URL::to($category->cat_image)}}"style="width: 200px;height: 150px;">
                                    <input type="hidden" name="old_image" value="{{$category->cat_image}}">

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
