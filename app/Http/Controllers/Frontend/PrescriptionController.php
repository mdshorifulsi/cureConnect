<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use File;

class PrescriptionController extends Controller
{
    public function prescriptions_upload(Request $request)
    {

        $prescription = new Prescription;

        $prescription->prescription_order_id = mt_rand(10000000, 999999999);

        if ($request->hasFile('prescription_image')) {
            $file = $request->file('prescription_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $prescription->prescription_image = $request->file('prescription_image')->move("images/prescription_image", $name);
        }

        $prescription->save();
        Toastr::success('Your prescription Upload successfully :', 'success!');
        return redirect()->route('homePage');
    }
}
