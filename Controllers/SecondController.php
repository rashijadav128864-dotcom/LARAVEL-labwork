<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function index()
    {
        $name = "Rahul";
        $course = "BCA";
        $marks = 85;

        return view('second', compact('name', 'course', 'marks'));
    }
}
