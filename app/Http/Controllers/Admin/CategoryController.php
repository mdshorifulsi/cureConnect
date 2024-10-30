<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use Str;
use File;

class CategoryController extends Controller
{
    public function index()
    {

        $category = Category::latest()->get();
        return view('admin.category.index', compact('category'));


    }

    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'cat_name' => 'required|unique:categories',
                'cat_image' => 'required',
            ],
            [
                'cat_name.required' => 'Category name is required',
                'cat_image.required' => 'Category image is required',
            ]

        );


        $category = new Category;
        $category->cat_name = $request->cat_name;
        $category->cat_slug = Str::slug($request->cat_name);

        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $category->cat_image = $request->file('cat_image')->move("images/category_images", $name);
        }

        $category->save();
        Toastr::success('Category Add successfully :', 'success!');
        return redirect()->route('category.index');


    }

    public function edit($id)
    {

        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));

    }

    public function update(Request $request, $id)
    {

        $category = Category::find($id);
        $category->cat_name = $request->cat_name;
        $category->cat_slug = Str::slug($request->cat_name);

        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $category->cat_image = $request->file('cat_image')->move("images/category_images", $name);
        }

        $category->save();
        Toastr::success('Category Update successfully :', 'success!');
        return redirect()->route('category.index');


    }





    public function destroy($id)
    {
        $category = Category::find($id);

        if (File::exists($category->cat_image)) {
            File::delete($category->cat_image);
        }

        $category->delete();
        return redirect()->route('category.index');


    }


    public function inactive($id)
    {

        Category::where('id', $id)
            ->update(['status' => 0]);
        return response()->json([
            'status' => 'success',
        ]);

    }

    public function active($id)
    {

        Category::where('id', $id)
            ->update(['status' => 1]);
        return response()->json([
            'status' => 'success',
        ]);
    }

}
