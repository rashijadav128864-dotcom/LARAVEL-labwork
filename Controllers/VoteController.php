<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    // Display the voting form
    public function index()
    {
        return view('vote');
    }

    // Submit the vote
    public function submitVote(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'candidate' => 'required|in:Candidate A,Candidate B,Candidate C',
        ]);

        $name = $request->input('name');
        $candidate = $request->input('candidate');

        return view('vote', compact('name', 'candidate'));
    }
}
