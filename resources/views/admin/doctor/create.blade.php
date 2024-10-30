@extends('admin_layouts')
@section('admin_content')
@section('title','doctor')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mb-5">
            <div class="mt-1 shadow-none p-3 mb-3 bg-light rounded " >
                <a id="catbtn" href="{{route('doctor.index')}}" class="btn btn-sm btn-success ">
                    Back to doctor List
                </a>
            </div>



            <form method="POST" action="{{route('doctor.store')}}" enctype="multipart/form-data">
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
                                        <input type="text" name="doctor_name" class="form-control @error('doctor_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Doctor name" >

                                        @error('doctor_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Doctor designation</label>
                                        <input type="text" name="doctor_designation" class="form-control @error('doctor_designation') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Doctor designation" >

                                        @error('doctor_designation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Doctor Department</label>
                                        <input type="text" name="doctor_department" class="form-control @error('doctor_department') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Doctor department" >

                                        @error('doctor_department')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Hospital name</label>
                                        <input type="text" name="Hospital" class="form-control @error('Hospital') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Hospital Name" >

                                        @error('Hospital')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Chamber Day</label>
                                        <input type="text" name="chamber_day" class="form-control @error('chamber_day') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Chamber Day" >

                                        @error('chamber_day')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Chamber Time</label>
                                        <input type="text" name="chamber_time" class="form-control @error('chamber_time') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Chamber time" >

                                        @error('chamber_time')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                    </div>
                                </div>


                            </div>
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="formFile"  class="form-label">Doctor image</label>
                                        <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="form-control @error('doctor_image') is-invalid @enderror" type="file" name="doctor_image" >

                                        @error('doctor_image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror

                                        <img id="newImg" class="img-thumbnail mt-2" src="{{asset ('assets/backend/images/default.jpg') }}" style="width:180px">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label for="exampleInputEmail1" class="form-label">Assistent Phone</label>
                                        <input type="text" name="doctor_assistent" class="form-control @error('doctor_assistent') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Assistent Number" >

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




@endsection
