<?php

namespace App\Http\Controllers\Admin;

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
        $categories = Category::get();
    return view('admin.Category.index',compact('categories'));
    }

    public function storeCat(Request $request){
        $request->validate([
            'category_name' => 'required |unique:categories,category_name'
        ]);
         $category = new Category();
         $category ->category_name =$request->category_name;
         $category->save();
         return redirect()->back()->with('success','Category added successfully ');
    }
}
