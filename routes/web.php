<?php

use App\Http\Controllers\JobController;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Route;

Route::get('',fn()=>redirect('jobs'));

Route::resource('jobs', JobController::class)->only(['index','show']);
