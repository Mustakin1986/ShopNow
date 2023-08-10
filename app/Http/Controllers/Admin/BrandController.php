<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::get();
    return view('admin.Brand.index',compact('brands'));
    }

    public function storeBrnad(Request $request){
        $request->validate([
            'brand_name' => 'required |unique:brands,brand_name'
        ]);
         $brand = new Brand();
         $brand ->brand_name =$request->brand_name;
         $brand->save();
         return redirect()->back()->with('success','Brand added successfully ');
    }

    public function CatEdit($id){
     $category = Brand::find($id);
    //  return view('admin.Category.index');
    }

    public function CatDelete($id){
       $category = Brand::find($id);
       $category->delete();
       return redirect()->back()->with('success','Category deleted Successfully');
    }
}
