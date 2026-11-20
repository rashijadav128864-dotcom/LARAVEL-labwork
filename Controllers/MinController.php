<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinController extends Controller
{
    public function findMinimum(Request $request)
    {
       $result = "";

       if($request->isMethod('post')) {
       $a = $request->input('num1');
       $b= $request->input('num2');

       if ($a < $b) {
         $result = "$a is the Minimum number.";
        
        }else if ($b < $a) {
         $result = "$b is the Minimum number.";
        }else{
          $result = "Both numbers are equal";
        }
       }

       return view('Minimum',compact('result'));
    }
}
