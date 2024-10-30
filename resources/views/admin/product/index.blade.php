@extends('admin_layouts')
@section('admin_content')
@section('title','Product')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="mt-1 shadow-none p-3 mb-3 bg-light rounded " >
                <a id="catbtn" href="{{route('product.create')}}" class="btn btn-sm btn-success ">
                    + Add Product
                </a>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table "></i>
                    All Product List
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Generic</th>
                                <th>Image</th>
                                <th>Brand</th>
                                <th>Category</th>

                                <th>unit_price</th>
                                <th>Discount</th>
                                <th>Best_price</th>


                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($product as $key=>$row)
                        <tbody>
                            <tr>

                                <td>{{$row->medicine_name }} </td>
                                <td>{{$row->generic_name }} </td>
                                <td>
                                    <img class="rounded" src="{{ asset($row->medicine_image) }}" width="100px"
                                        height="80px">
                                </td>
                                <td>{{$row->brand->brand_name }}</td>
                                <td>{{$row->category->cat_name }}</td>



                                <td>{{$row->unit_price }} Tk</td>

                                <td><span class="badge bg-success">{{$row->discount }} %</span> </td>
                                <td>{{$row->best_price }} Tk</td>
                                <td>
                                    @if($row->status==1)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                <td>

                                    @if($row->status==1)
                                    <a href="" class="btn btn-sm btn-danger inactive " data-id="{{$row->id}}"><i
                                            class="fa-solid fa-thumbs-up"></i></a>
                                    @else
                                    <a href="" class="btn btn-sm btn-success active" data-id="{{$row->id}}"><i
                                            class="fa-solid fa-thumbs-down"></i></a>
                                    @endif

                                    <a href="{{route('product.edit',$row->id)}}" class="btn btn-sm btn-warning ">
                                        <i class="fa-solid fa-pen-to-square"></i>


                                        <a class="btn btn-danger m-2" type="button"
                                            onclick="deleteProduct({{ $row->id }})"><i class="fa fa-trash"
                                                aria-hidden="true"></i></a>
                                        <form id="delete-form-{{$row->id}}"
                                            action="{{route('product.delete',$row->id)}}" method="PUT"
                                            style="display: none ; ">
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
    </main>

</div>


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
        url:"{{url('/product/active')}}/"+id,
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
                    title: 'Product Active successfully'
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
        url:"{{url('/product/inactive')}}/"+id,
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
                    title: 'product InActive successfully'
                });
            }
        }
    });
});

// inactive end



//category delete start
   function deleteProduct(id){
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
