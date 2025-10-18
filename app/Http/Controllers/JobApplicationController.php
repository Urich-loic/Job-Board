<?php

namespace App\Http\Controllers;

use App\Models\JobsBoard;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(JobsBoard $job)
    {
        // $job = JobsBoard::findOrFail($id);
        return view('job_application.create', compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'expected_salary'=>'required|number',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
