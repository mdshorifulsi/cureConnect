@extends('admin_layouts')
@section('admin_content')
@section('title','doctor')



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="mt-1 shadow-none p-3 mb-3 bg-light rounded " >
                <a id="catbtn" href="{{route('doctor.create')}}" class="btn btn-sm btn-success ">
                    + Add doctor
                </a>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table "></i>
                    All doctor List
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                            <tr>

                                <th>Doctor</th>
                                <th>Designation</th>
                                <th>department</th>
                                <th>Hospital</th>
                                <th>chamber_day</th>
                                <th>chamber_time</th>
                                <th>Assistent_number</th>
                                <th>Image</th>


                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($doctor as $key=>$row)
                        <tbody>
                            <tr>

                                <td>{{$row->doctor_name }} </td>
                                <td>{{$row->doctor_designation }} </td>
                                <td>{{$row->doctor_department }} </td>
                                <td>{{$row->Hospital }} </td>
                                <td>{{$row->chamber_day }} </td>
                                <td>{{$row->chamber_time }} </td>
                                <td>{{$row->doctor_assistent }} </td>
                                <td>
                                    <img class="rounded" src="{{ asset($row->doctor_image) }}" width="100px"
                                        height="80px">
                                </td>





                                <td>

                                    @if($row->status==1)
                                    <a href="" class="btn btn-sm btn-danger inactive " data-id="{{$row->id}}"><i
                                            class="fa-solid fa-thumbs-up"></i></a>
                                    @else
                                    <a href="" class="btn btn-sm btn-success active" data-id="{{$row->id}}"><i
                                            class="fa-solid fa-thumbs-down"></i></a>
                                    @endif

                                    <a href="{{route('doctor.edit',$row->id)}}" class="btn btn-sm btn-warning ">
                                        <i class="fa-solid fa-pen-to-square"></i>


                                        <a class="btn btn-danger m-2" type="button"
                                            onclick="deleteDoctor({{ $row->id }})"><i class="fa fa-trash"
                                                aria-hidden="true"></i></a>
                                        <form id="delete-form-{{$row->id}}"
                                            action="{{route('doctor.delete',$row->id)}}" method="PUT"
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
        url:"{{url('/doctor/active')}}/"+id,
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
                    title: 'doctor Active successfully'
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
        url:"{{url('/doctor/inactive')}}/"+id,
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
                    title: 'doctor InActive successfully'
                });
            }
        }
    });
});

// inactive end



//category delete start
   function deleteDoctor(id){
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
