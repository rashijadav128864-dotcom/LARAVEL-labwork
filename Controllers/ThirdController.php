<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Laptop', 'price' => 45000],
            ['name' => 'Mobile', 'price' => 15000],
            ['name' => 'Headphones', 'price' => 2000],
            ['name' => 'Keyboard', 'price' => 1000]
        ];

        return view('third', compact('products'));
    }
}
