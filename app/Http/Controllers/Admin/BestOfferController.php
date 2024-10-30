<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BestOffer;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use File;

class BestOfferController extends Controller
{

    public function index()
    {

        $bestOffer = BestOffer::latest()->get();
        return view('admin.bestOffer.index', compact('bestOffer'));


    }



    public function store(Request $request)
    {

        $validated = $request->validate([
            'best_offer_title' => 'required',
            'best_offer_image' => 'required',


        ]);

        $bestOffer = new BestOffer;
        $bestOffer->best_offer_title = $request->best_offer_title;

        if ($request->hasFile('best_offer_image')) {
            $file = $request->file('best_offer_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $bestOffer->best_offer_image = $request->file('best_offer_image')->move("images/best_offer_images", $name);
        }

        $bestOffer->save();
        Toastr::success('Best Offer Add successfully :', 'success!');
        return redirect()->back();


    }

    public function edit($id)
    {
        $bestOffer = BestOffer::find($id);
        return view('admin.bestOffer.edit', compact('bestOffer'));



    }


    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'best_offer_title' => 'required',
        //     'best_offer_image' => 'required',
        // ]);

        $bestOffer = BestOffer::find($id);
        $bestOffer->best_offer_title = $request->best_offer_title;

        if ($request->hasFile('best_offer_image')) {
            $file = $request->file('best_offer_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $bestOffer->best_offer_image = $request->file('best_offer_image')->move("images/best_offer_images", $name);
        }
        $bestOffer->save();
        Toastr::success('Slider Update successfully :', 'success!');
        return redirect()->route('bestOffer.index');




    }



    public function destroy($id)
    {
        $bestOffer = BestOffer::find($id);
        if (File::exists($bestOffer->best_offer_image)) {
            File::delete($bestOffer->best_offer_image);
        }
        $bestOffer->delete();
        return redirect()->route('bestOffer.index');


    }


    public function inactive($id)
    {

        BestOffer::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        BestOffer::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }
}
