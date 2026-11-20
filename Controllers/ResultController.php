<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        // Student records
        $students = [
            ['roll' => 1, 'name' => 'Rishi', 'course' => 'BCA', 'semester' => 6, 'marks' => 85],
            ['roll' => 2, 'name' => 'Rashi', 'course' => 'BCA', 'semester' => 6, 'marks' => 85],
            ['roll' => 3, 'name' => 'Amit', 'course' => 'BCA', 'semester' => 1, 'marks' => 65],
            ['roll' => 4, 'name' => 'Neha', 'course' => 'BBA', 'semester' => 2, 'marks' => 75],
            ['roll' => 5, 'name' => 'Raj', 'course' => 'BBA', 'semester' => 3, 'marks' => 55],
            ['roll' => 6, 'name' => 'Pooja', 'course' => 'BCOM', 'semester' => 4, 'marks' => 45],
            ['roll' => 7, 'name' => 'Karan', 'course' => 'BCOM', 'semester' => 5, 'marks' => 77],
            ['roll' => 8, 'name' => 'Meera', 'course' => 'BBA', 'semester' => 5, 'marks' => 70],
        ];

        // Get selected course and semester
        $course = $request->input('course', '');
        $semester = $request->input('semester', '');

        // Initialize empty results
        $results = [];

        // Filter student records
        if ($request->filled('course') && $request->filled('semester')) {

            $results = array_filter($students, function ($student) use ($course, $semester) {
                return $student['course'] === $course
                    && $student['semester'] === (int) $semester;
            });
        }

        // Return Blade view
        return view('results', compact('students', 'results', 'course', 'semester'));
    }
}
