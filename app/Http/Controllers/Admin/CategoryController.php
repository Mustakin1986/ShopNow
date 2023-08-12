<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function index(){
        $brands = Brand::get();
        $categories = Category::get();
    return view('admin.Category.index',compact('categories','brands'));
    }

    public function storeCat(Request $request){
        $request->validate([
            'brand_id'=>'required|integer',
            'category_name' => 'required |unique:categories,category_name'
        ]);
         $category = new Category();
         $category->brand_id = $request->brand_id;
         $category ->category_name =$request->category_name;
         $category->save();
         return redirect()->back()->with('success','Category added successfully ');
    }

    public function CatEdit($id){
     $category = Category::find($id);
     return view('admin.Category.index');
    }

    public function CatDelete($id){
       $category = Category::find($id);
       $category->delete();
       return redirect()->back()->with('success','Category deleted Successfully');
    }

}
