<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductList(){
        return view('admin.Product.index');
    }
    public function ProductCreate(){
        return view('admin.Product.add_product');
    }
}
