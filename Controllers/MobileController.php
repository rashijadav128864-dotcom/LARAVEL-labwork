<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index(Request $request)
    {
        // Mobile details
        $mobile = [
            ['id' => 1, 'name' => 'iPhone 15', 'company' => 'Apple', 'price' => 65000, 'stock' => 'Available'],
            ['id' => 3, 'name' => 'Galaxy S24', 'company' => 'Samsung', 'price' => 65000, 'stock' => 'Available'],
            ['id' => 5, 'name' => 'Oppo Reno 12', 'company' => 'Oppo', 'price' => 30000, 'stock' => 'Available'],
            ['id' => 7, 'name' => 'Vivo V30', 'company' => 'Vivo', 'price' => 33000, 'stock' => 'Available']
        ];

        // Get selected company and model
        $company = $request->input('company', '');
        $model = $request->input('model', '');

        // Empty results
        $results = [];

        // Filter mobile records
        if ($request->filled('company') && $request->filled('model')) {

            $results = array_filter($mobile, function ($item) use ($company, $model) {

                return $item['company'] == $company
                    && $item['name'] == $model;

            });
        }

        // Return Blade view
        return view('mobile', compact('mobile', 'results', 'company', 'model'));
    }
}
