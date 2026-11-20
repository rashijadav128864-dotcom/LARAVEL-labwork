<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index()
    {
        return view('sum');
    }

    public function calculateSum(Request $request)
    {
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
        ]);

        $a = $request->input('a');
        $b = $request->input('b');

        $sum = $a + $b;

        return view('sum', compact('a', 'b', 'sum'));
    }
}
