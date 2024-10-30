@extends('admin_layouts')
@section('admin_content')
@section('title','coupon')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card mt-3 mb-5">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                             Edit coupon

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('coupon.update',$coupon->id)}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                  <label for="exampleInputEmail1" class="form-label">coupon Name</label>
                                  <input type="text" name="coupon_name" value="{{ $coupon->coupon_name }}" class="form-control @error('coupon_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="coupon name">
                                  @error('coupon_name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                </div>


                                    <div class="form-group ">
                                        <label for="exampleInputEmail1" class="form-label">Discount</label>
                                        <input type="text" name="discount" value="{{ $coupon->discount }}" class="form-control @error('discount') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Discount">

                                        @error('discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    </div>


                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="mb-1">discount Ttype</label>
                                        <select class="form-control  @error('discount_type') is-invalid @enderror" id="discount_type" name="discount_type" required>
                                            <option selected>>> Select Discount type</option>
                                            <option {{ ($coupon->discount_type=='percent')?'selected':'' }} value="percent">Percent</option>
                                            <option {{ ($coupon->discount_type=='flat')?'selected':'' }} value="flat">Flat</option>

                                        </select>

                                        @error('discount_type')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

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
