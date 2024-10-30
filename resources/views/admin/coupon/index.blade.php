@extends('admin_layouts')
@section('admin_content')
@section('title','coupon')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            All coupon List
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>coupon Name</th>
                                        <th>discount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($coupon as $key=>$row)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{$row->coupon_name }}</td>
                                        <td>{{$row->discount }}
                                            @if($row->discount_type=='percent') % off
                                            @else
                                                Taka off
                                                @endif



                                        <td>
                                            @if($row->status==1)
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>

                                            @if($row->status==1)
                                               <a href="" class="btn btn-sm btn-danger inactive " data-id="{{$row->id}}"><i class="fa-solid fa-thumbs-up"></i></a>
                                               @else
                                               <a href=""  class="btn btn-sm btn-success active" data-id="{{$row->id}}"><i class="fa-solid fa-thumbs-down"></i></a>
                                               @endif

                                               <a href="{{route('coupon.edit',$row->id)}}" class="btn btn-sm btn-warning ">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                               <button class="btn btn-danger" type="button" onclick="deletecoupon({{ $row->id }})"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                 <form id="delete-form-{{$row->id}}" action="{{route('coupon.delete',$row->id)}}"  method="PUT" style="display: none ; " >
                                                 @csrf
                                                 @method('DELETE')
                                                 </form>
                                           </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col md 6">
                        <div class="card mt-1">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                 Add Brand
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('coupon.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Coupon name</label>
                                      <input type="text" name="coupon_name" class="form-control @error('coupon_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Coupon name" >

                                      @error('coupon_name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror

                                    </div>


                                        <div class="form-group m-1">
                                            <label for="exampleInputEmail1" class="form-label">Discount</label>
                                            <input type="text" name="discount" class="form-control  @error('discount') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Discount" >
                                            @error('discount')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>




                                        <div class="form-group">
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





                                    <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
                                  </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>

</div>



<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>



<script>

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});




    $(document).on('click','.active',function(e){
   e.preventDefault();

   let id=$(this).data('id');

    $.ajax({
        url:"{{url('/coupon/active')}}/"+id,
        type:"get",
        success:function(response){
            if(response.status == 'success'){
                $('.table').load(location.href+' .table')

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: 'coupon Active successfully'
                });

            }
        }
    });
});




//active end

// inactive start
$(document).on('click','.inactive',function(e){
   e.preventDefault();

   let id=$(this).data('id');

    $.ajax({
        url:"{{url('/coupon/inactive')}}/"+id,
        type:"get",
        success:function(response){
            if(response.status == 'success'){
                $('.table').load(location.href+' .table')

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: 'coupon InActive successfully'
                });
            }
        }
    });
});

// inactive end



//category delete start
   function deletecoupon(id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    })
    .then((result) => {
        if(result.isConfirmed) {
            event.preventDefault();
            document.getElementById('delete-form-'+id).submit();
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )}
        })
}

        //category delete end


</script>
@endsection
