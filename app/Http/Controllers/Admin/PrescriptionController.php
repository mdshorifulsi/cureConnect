<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use File;

class PrescriptionController extends Controller
{
    public function index()
    {

        $prescription = Prescription::latest()->get();
        return view('admin.prescription.index', compact('prescription'));

    }


    public function inactive($id)
    {

        Prescription::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        Prescription::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }

}
