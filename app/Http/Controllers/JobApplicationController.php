<?php

namespace App\Http\Controllers;

use App\Models\JobsBoard;
use App\Policies\JobsBoardPolicy;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class JobApplicationController extends Controller
{
    use AuthorizesRequests;

    /**
     * Show the form for creating a new resource.
     */
    public function create(JobsBoard $job)
    {
        $this->authorize('apply', $job);
        return view('job_application.create', compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobsBoard $job, Request $request)
    {
        $job->jobApplications()->create([
            'user_id' => $request->user()->id,
            ...$request->validate([
                'expected_salary' => 'required|numeric|min:20000',
            ])
        ]);

        return redirect()->route('jobs.show', $job)->with('success', 'Job application submitted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
