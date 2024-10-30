@extends('admin_layouts')
@section('admin_content')
@section('title','product')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid ">
            <div class="mt-1 shadow-none p-3 mb-3 bg-light rounded " >
                <a id="catbtn" href="{{route('product.index')}}" class="btn btn-sm btn-success ">
                    Back to Product
                </a>
            </div>



            <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            medicine Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">medicine Name</label>
                                        <input type="text" name="medicine_name" class="form-control @error('medicine_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="medicine name" >

                                        @error('medicine_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Generic Name</label>
                                        <input type="text" name="generic_name" class="form-control @error('generic_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Generic name" >

                                        @error('generic_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>

                            </div>

                            <div class="row ">
                                <div class="col-md-4 ">
                                    <div class="form-group m-1">
                                        <label for="exampleFormControlInput1" class="mb-1">Medicine Type</label>
                                        <select class="form-control  @error('medicine_type') is-invalid @enderror" id="medicine_type" name="medicine_type" required>
                                            <option> >> Medicine Type</option>

                                            <option value="tablet">tablet</option>
                                            <option value="capsule">capsule</option>
                                            <option value="syrup">syrup</option>
                                            <option value="injection">injection</option>
                                            <option value="cream">cream</option>
                                            <option value="other">other</option>
                                        </select>

                                        @error('medicine_type')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>


                                <div class="col-md-4 ">
                                        <div class="form-group m-1">
                                            <label for="exampleInputEmail1" class="form-label">medicine power</label>
                                            <input type="text" name="power" class="form-control  @error('power') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="medicine power" >

                                            @error('power')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-4 ">
                                        <div class="form-group m-1">
                                            <label for="exampleFormControlInput1" class="mb-1">power_type</label>
                                            <select class="form-control  @error('power_type') is-invalid @enderror" id="power_type" name="power_type" required>
                                                <option> >>power type</option>

                                                <option value="mg">Mg</option>
                                                <option value="ml">Ml</option>
                                                <option value="peach">Peach</option>


                                            </select>

                                            @error('power_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>


                            </div>


                            <div class="row ">
                                <div class="col-md-6 ">
                                    <div class="form-group m-1">
                                        <label for="exampleFormControlInput1" class="mb-1">Brand Name</label>
                                        <select class="form-control  @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id" required>
                                            <option> >> Select Brand Name...</option>
                                            @foreach($brand as $row)
                                            <option value="{{$row->id}}">{{$row->brand_name}}</option>
                                            @endforeach;
                                        </select>

                                        @error('brand_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>




                                <div class="col-md-6 ">
                                    <div class="form-group m-1">
                                        <label for="exampleFormControlInput1" class="mb-1">Category Name</label>
                                        <select class="form-control  @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                                            <option> >> Select category Name...</option>
                                            @foreach($category as $row)
                                            <option value="{{$row->id}}">{{$row->cat_name}}</option>
                                            @endforeach;
                                        </select>

                                        @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>




                            </div>

                            <div class="row ">




                            </div>


                        </div>

                    </div>


                    <div class="card mt-3 ">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Product price and Stock
                        </div>
                        <div class="card-body">


                                <div class="row ">
                                    <div class="col-md-6 ">
                                        <div class="form-group m-1">
                                            <label for="exampleInputEmail1" class="form-label">unit price</label>
                                            <input type="text" name="unit_price" class="form-control  @error('unit_price') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Unit price" >

                                            @error('unit_price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group m-1">
                                            <label for="exampleInputEmail1" class="form-label">medicine Unit</label>
                                            <input type="number" name="medicine_unit" class="form-control  @error('medicine_unit') is-invalid @enderror" min="1"  aria-describedby="emailHelp" placeholder="medicine unit" >

                                            @error('medicine_unit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>




                                </div>

                                <div class="row">
                                    <div class="col-md-4 ">
                                        <div class="form-group m-1">
                                            <label for="exampleInputEmail1" class="form-label">Discount</label>
                                            <input type="text" name="discount" class="form-control  @error('discount') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Discount" >
                                            @error('discount')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-4 ">
                                        <div class="form-group m-1">
                                            <label for="exampleFormControlInput1" class="mb-1">discount Ttype</label>
                                            <select class="form-control  @error('discount_type') is-invalid @enderror" id="discount_type" name="discount_type" required>
                                                <option selected>>> Select Discount type</option>
                                                <option value="percent">Percent</option>
                                                <option value="flat">Flat</option>
                                            </select>

                                            @error('discount_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group m-1">
                                            <label for="exampleInputEmail1" class="form-label">Stock</label>
                                            <input type="text" name="stock_quantity" class="form-control  @error('stock_quantity') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="stock quantity" >
                                            @error('stock_quantity')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>

                      </div>


                <div class="col-md-4">
                    <div class="col md 6">
                        <div class="card mt-1">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Image
                            </div>
                            <div class="card-body">

                                    <div class="form-group">
                                        <label for="formFile"  class="form-label d-block">Medicine Image</label>

                                        <img id="newImg" class="img-thumbnail mt-1" src="{{asset ('assets/backend/images/default.jpg') }}" style="width:180px">

                                        <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="form-control mt-2  @error('medicine_image') is-invalid @enderror" type="file" name="medicine_image" >

                                        @error('medicine_image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>

                                    <hr>
                            </div>
                        </div>

                    </div>
                    <div class="col md 6">
                        <div class="card mt-3">
                            <div class="card-header">
                                <i class="bi bi-calendar-date"></i>
                                Date and status
                            </div>
                            <div class="card-body">
                                <div class="form-group m-1">
                                    <label for="exampleInputEmail1" class="form-label">manufacture date</label>
                                    <input type="date" name="manufacture_date" class="form-control @error('manufacture_date') is-invalid @enderror"  aria-describedby="emailHelp" >

                                    @error('manufacture_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                </div>
                                <div class="form-group m-1">
                                    <label for="exampleInputEmail1" class="form-label">Expire date</label>
                                    <input type="date" name="expire_date" class="form-control @error('expire_date') is-invalid @enderror"  aria-describedby="emailHelp" >

                                    @error('expire_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                </div>
                                      <br>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Product Description
                        </div>
                        <div class="card-body">
                            <div class="form-group">

                                <textarea class="form-control" rows="3" name="description" placeholder="Product Descriptions"></textarea>
                            </div>
                        </div>

                    </div>
            </div>


            <div class="col-md-12 ">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </div>

        </form>

            </div>


    </main>

</div>

<script src="{{ asset('assets/backend/js/jquery-3.7.0.min.js') }}"></script>


{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}

<script>

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});



    $(document).ready(function(){


$('select[name="category_id"]').on('change',function(){
    var category_id=$(this).val();

    if(category_id){
        $.ajax({
            url:"{{url('/get/subcategory')}}/"+category_id,
            type:"GET",
            dataType:"json",
            success:function(data){
                // console.log(data);
                $("#subcategory_id").empty();
                $.each(data,function(key,value){
                    $("#subcategory_id").append('<option value="'+value.id+'">'+value.sub_category_name+ ' </option>');

                })
            },

        });

        }else{
         alert('danger');
        }

});

});



</script>

@endsection
