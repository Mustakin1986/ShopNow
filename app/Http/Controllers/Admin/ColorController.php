<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Color;


class ColorController extends Controller
{
   public function ColorStore(Request $request){
        $request->validate([
         'inputs.*.name'=>'required',
        ]);
        foreach($request->inputs as $key => $value){
          $color = Color::Create($value);
        }
        return back()->with('success','color had been added');
      }
}
