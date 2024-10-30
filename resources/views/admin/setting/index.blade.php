@extends('admin_layouts')
@section('title','Setting')
@section('admin_content')
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h4 class="font-weight-light text-uppercase">Setting</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('setting.update',$setting->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="mt-2 ">Name</label>
                                        <div class=" ">
                                            <input class="form-control"  value="{{$setting->projectName }}" name="projectName" type="text"
                                            placeholder="Project Name" />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="mt-2 ">Office Location</label>
                                        <div class=" ">
                                            <input class="form-control"  value="{{$setting->projectAddress }}" name="projectAddress" type="text"
                                            placeholder="Address" />

                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="mt-2">Office Phone Number</label>
                                        <div class=" mb-3">
                                            <input class="form-control" id="projectPhone" value="{{$setting->projectPhone }}" name="projectPhone" type="number"
                                            placeholder="Phone Number" />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="mt-2">Official Email</label>
                                        <div class=" mb-3">
                                            <input class="form-control" id="projectEmail" value="{{$setting->projectEmail }}" name="projectEmail" type="email"
                                            placeholder="Official Email " />

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <img src="{{URL::to($setting->logo)}}"style="width: 300px;height: 200px;">
                                            </div>
                                            <input type="hidden" name="old_image" value="{{$setting->logo}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Change Logo</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="file" name="logo" id="logo">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="text-center btn btn-danger ">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>



@endsection
