<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $operation = $request->input('operation');

        $result = '';

        if ($operation == 'add') {
            $result = $a + $b;
        } elseif ($operation == 'subtract') {
            $result = $a - $b;
        } elseif ($operation == 'multiply') {
            $result = $a * $b;
        } elseif ($operation == 'divide') {
            if ($b != 0) {
                $result = $a / $b;
            } else {
                $result = 'Cannot divide by zero';
            }
        }

        return view('calculator', compact('result', 'a', 'b', 'operation'));
    }
}
