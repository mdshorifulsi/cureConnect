@extends('admin_layouts')
@section('admin_content')
@section('title','Order')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="mt-1 shadow-none p-3 mb-3 bg-light rounded " >
                <a id="catbtn" href="{{route('product.create')}}" class="btn btn-sm btn-success ">
                    + Add order
                </a>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table "></i>
                    All order List
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                            <tr>

                                <th>invoice_no </th>
                                <th>Order_Date </th>
                                <th>phone_number</th>
                                <th>Address</th>
                                <th>Total</th>





                                <th>Is Complate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($order as $key=>$row)
                        <tbody>
                            <tr>

                                <td>{{$row->invoice_no }} </td>
                                <td>{{$row->date }} </td>
                                <td>{{$row->phone_number }} </td>
                                <td>{{$row->address }} </td>
                                <td>{{$row->total }} Taka </td>

                                <td>
                                    @if($row->is_completed==1)
                                    <span class="badge bg-success">Order Done</span>
                                    @else
                                    <span class="badge bg-danger"> pending </span>
                                    @endif
                                </td>
                                <td>

                                    @if($row->is_completed==1)
                                    <a href="" class="btn btn-sm btn-danger pending " data-id="{{$row->id}}"><i class="fa-solid fa-thumbs-up"></i></a>
                                    @else
                                    <a href=""  class="btn btn-sm btn-success done" data-id="{{$row->id}}"><i class="fa-solid fa-thumbs-down"></i></a>
                                    @endif

                                    {{-- <a href="{{route('order.view',$row->id)}}" class="btn btn-sm btn-warning ">
                                        <i class="fa fa-eye" aria-hidden="true"></i>

                                    </a> --}}

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





    $(document).on('click','.done',function(e){
   e.preventDefault();

   let id=$(this).data('id');

    $.ajax({
        url:"{{url('/order/done')}}/"+id,
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
                    title: 'Order successfully done'
                });

            }
        }
    });
});




//active end

// inactive start
$(document).on('click','.pending',function(e){
   e.preventDefault();

   let id=$(this).data('id');

    $.ajax({
        url:"{{url('/order/pending')}}/"+id,
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
                    title: 'Order  Cancel'
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
