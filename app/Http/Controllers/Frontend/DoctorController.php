<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor_list()
    {
        return view('frontend.layouts.doctor.doctor_list');
    }

    public function appointment()
    {
        return view('frontend.layouts.doctor.appointment_done');

    }
    public function blood()
    {
        return view('frontend.layouts.doctor.blood');

    }
    public function ambulance()
    {
        return view('frontend.layouts.doctor.ambulance');

    }
}
