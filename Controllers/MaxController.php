<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxController extends Controller
{
    public function findMaximum(Request $request)
    {
       $result="";

     if($request->isMethod('post')){
     $a=$request->input('num1');
     $b=$request->input('num2');
     $c=$request->input('num3');

     if ($a > $b) {
      $result = "$a is the Maximum number.";
      
      }else if ($b > $c) {
      $result = "$b is the Maximum number.";
      
      }else {
      $result = "$c is the Maximum number.";
      }
     }

     return view('maximum', compact('result'));
    }
}
