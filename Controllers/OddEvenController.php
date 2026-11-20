<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OddEvenController extends Controller
{
    public function index()
    {
        return view('oddeven');
    }

    public function check(Request $request)
    {
        $request->validate([
            'number' => 'required|integer',
        ]);

        $number = $request->input('number');

        if ($number % 2 == 0) {
            $result = "Even Number";
        } else {
            $result = "Odd Number";
        }

        return view('oddeven', compact('number', 'result'));
    }
}
