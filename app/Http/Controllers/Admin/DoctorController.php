<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use File;

class DoctorController extends Controller
{
    public function index()
    {

        $doctor = Doctor::latest()->get();
        return view('admin.doctor.index', compact('doctor'));


    }

    public function create()
    {



        return view('admin.doctor.create');

    }



    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'doctor_name' => 'required',
                'doctor_designation' => 'required',
                'doctor_department' => 'required',
                'Hospital' => 'required',
                'chamber_day' => 'required',
                'chamber_time' => 'required',
                'doctor_assistent' => 'required',
                'doctor_image' => 'required',
            ],
            [
                'doctor_name.required' => 'Doctor name is required',
                'doctor_designation.required' => 'Doctor Designation is required',
                'doctor_department.required' => 'Doctor Department is required',
                'Hospital.required' => 'Hospital is required',
                'chamber_day.required' => 'Chamber day is required',
                'chamber_time.required' => 'Chamber day is required',
                'doctor_assistent.required' => 'doctor assistant number is required',
                'doctor_image.required' => 'Image is required',
            ]

        );


        $doctor = new Doctor;
        $doctor->doctor_name = $request->doctor_name;
        $doctor->doctor_designation = $request->doctor_designation;
        $doctor->doctor_department = $request->doctor_department;
        $doctor->Hospital = $request->Hospital;
        $doctor->chamber_day = $request->chamber_day;
        $doctor->chamber_time = $request->chamber_time;
        $doctor->doctor_assistent = $request->doctor_assistent;


        if ($request->hasFile('doctor_image')) {
            $file = $request->file('doctor_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $doctor->doctor_image = $request->file('doctor_image')->move("images/doctor_image", $name);
        }

        $doctor->save();
        Toastr::success('doctor Add successfully :', 'success!');
        return redirect()->route('doctor.index');


    }

    public function edit($id)
    {

        $doctor = Doctor::find($id);
        return view('admin.doctor.edit', compact('doctor'));

    }


    public function update(Request $request, $id)
    {

        $doctor = Doctor::find($id);

        $doctor->doctor_name = $request->doctor_name;
        $doctor->doctor_designation = $request->doctor_designation;
        $doctor->doctor_department = $request->doctor_department;
        $doctor->Hospital = $request->Hospital;
        $doctor->chamber_day = $request->chamber_day;
        $doctor->chamber_time = $request->chamber_time;
        $doctor->doctor_assistent = $request->doctor_assistent;


        if ($request->hasFile('doctor_image')) {
            $file = $request->file('doctor_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $doctor->doctor_image = $request->file('doctor_image')->move("images/doctor_image", $name);
        }

        $doctor->save();
        Toastr::success('doctor Update successfully :', 'success!');
        return redirect()->route('doctor.index');


    }



    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if (File::exists($doctor->doctor_image)) {
            File::delete($doctor->doctor_image);
        }

        $doctor->delete();
        return redirect()->route('doctor.index');


    }


    public function inactive($id)
    {

        Doctor::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        Doctor::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }
}
