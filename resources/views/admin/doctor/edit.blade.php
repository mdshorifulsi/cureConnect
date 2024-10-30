@extends('admin_layouts')
@section('admin_content')
@section('title','Doctor')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid ">
            <div class="mt-1 shadow-none p-3 mb-3 bg-light rounded " >
                <a id="catbtn" href="{{route('product.index')}}" class="btn btn-sm btn-success ">
                    Back to Doctor
                </a>
            </div>

            <form method="POST" action="{{route('doctor.update',$doctor->id)}}" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="card ">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            doctor
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Doctor Name</label>
                                        <input type="text" name="doctor_name" value="{{ $doctor->doctor_name }}" class="form-control @error('doctor_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Doctor name" >



                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Doctor designation</label>
                                        <input type="text" name="doctor_designation" value="{{ $doctor->doctor_designation }}" class="form-control @error('doctor_designation') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Doctor designation" >


                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Doctor Department</label>
                                        <input type="text" name="doctor_department" value="{{ $doctor->doctor_department }}" class="form-control @error('doctor_department') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Doctor department" >


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Hospital name</label>
                                        <input type="text" name="Hospital" value="{{ $doctor->Hospital }}" class="form-control @error('Hospital') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Hospital Name" >



                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Chamber Day</label>
                                        <input type="text" name="chamber_day" value="{{ $doctor->chamber_day }}" class="form-control @error('chamber_day') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Chamber Day" >


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Chamber Time</label>
                                        <input type="text" name="chamber_time" value="{{ $doctor->chamber_time }}" class="form-control @error('chamber_time') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Chamber time" >
                                    </div>
                                </div>


                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label class="d-block text-center mb-2">Old Image</label>
                                        <img src="{{URL::to($doctor->doctor_image)}}"style="width: 200px;height: 150px;">
                                        <input type="hidden" name="old_image" value="{{$doctor->doctor_image}}">
                                        <input type="file" class="form-control mt-2 @error('doctor_image') is-invalid @enderror" name="doctor_image">

                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Assistent Phone</label>
                                        <input type="text" name="doctor_assistent" value="{{ $doctor->doctor_assistent }}" class="form-control @error('doctor_assistent') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Assistent Number" >

                                        @error('doctor_assistent')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>


                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </div>

                    </div>


            </div>


         </div>




        </form>



            </div>


    </main>

</div>

<script src="{{ asset('assets/backend/js/jquery-3.7.0.min.js') }}"></script>


{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}

<script>




</script>

@endsection
