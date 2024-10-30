<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Testimonial;
use DB;

class HomePageController extends Controller
{
    public function index()
    {

        $slider = Slider::where('status', 1)->latest()->get();
        $category = Category::where('status', 1)->latest()->get();
        $product = Product::where('status', 1)->latest()->take(8)->get();
        return view('frontend.homePage', compact('slider', 'category', 'product'));
    }


    public function details($id)
    {


        $details = Product::find($id);
        $relatedProduct = Product::where('category_id', $details->category_id)->get();
        return view('frontend.details', compact('details', 'relatedProduct'));

    }


    public function search(Request $request)
    {
        $query = $request->get('query');
        $products = Product::where('medicine_name', 'LIKE', "%{$query}%")->get();

        return response()->json($products);
    }

    public function searchResult(Request $request)
    {
        $query = $request->search;
        $products = Product::where('medicine_name', 'LIKE', "%{$query}%")->get();
        return view('frontend.layouts.search-result', compact('products', 'query'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('frontend.layouts.search_show', compact('product'));
    }



    public function brand_Product($id)
    {
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();


        $brand_product = Product::with('category', 'brand', )->where('brand_id', $id)->take(8)->get();
        return view('frontend.layouts.brand_product', compact('brand_product', 'category', 'brand'));

    }
    public function category_Product($id)
    {
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();


        $category_product = Product::with('category', 'brand', )->where('category_id', $id)->take(8)->get();
        return view('frontend.layouts.category_product', compact('category_product', 'category', 'brand'));

    }


}
