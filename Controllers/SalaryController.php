<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index(Request $request)
    {
        // Employee salary records
        $employees = [
            ['id' => 1, 'name' => 'Rahul', 'department' => 'IT', 'salary' => 45000],
            ['id' => 2, 'name' => 'Priya', 'department' => 'HR', 'salary' => 35000],
            ['id' => 3, 'name' => 'Amit', 'department' => 'Finance', 'salary' => 40000],
            ['id' => 4, 'name' => 'Neha', 'department' => 'Marketing', 'salary' => 30000],
            ['id' => 5, 'name' => 'Rashi', 'department' => 'IT', 'salary' => 50000],
            ['id' => 6, 'name' => 'Karan', 'department' => 'HR', 'salary' => 38000],
        ];

        // Get selected employee
        $employee = $request->input('employee', '');

        // Initialize results
        $results = [];

        // Filter employee records
        if ($request->filled('employee')) {

            $results = array_filter($employees, function ($item) use ($employee) {

                return $item['name'] == $employee;

            });
        }

        // Return Blade view
        return view('salary', compact('employees', 'results', 'employee'));
    }
}
