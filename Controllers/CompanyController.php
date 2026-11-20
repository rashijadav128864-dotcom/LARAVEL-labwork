<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        // Company and product records
        $products = [
            ['id' => 1, 'company' => 'Apple', 'product' => 'iPhone', 'price' => 80000],
            ['id' => 2, 'company' => 'Apple', 'product' => 'MacBook', 'price' => 120000],
            ['id' => 3, 'company' => 'Samsung', 'product' => 'Galaxy Phone', 'price' => 60000],
            ['id' => 4, 'company' => 'Samsung', 'product' => 'Tablet', 'price' => 35000],
            ['id' => 5, 'company' => 'Dell', 'product' => 'Laptop', 'price' => 75000],
            ['id' => 6, 'company' => 'Dell', 'product' => 'Monitor', 'price' => 15000],
        ];

        $company = $request->input('company', '');
        $product = $request->input('product', '');

        $results = [];

        if ($request->filled('company') && $request->filled('product')) {

            $results = array_filter($products, function ($item) use ($company, $product) {

                return $item['company'] == $company
                    && $item['product'] == $product;

            });
        }

        return view('company', compact('results', 'company', 'product'));
    }
}
