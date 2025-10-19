<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MyJobApplicationController;
use App\Models\JobApplication;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Route;

Route::get('', fn() => redirect('jobs'));
Route::resource('jobs', JobController::class)->only(['index', 'show']);

Route::get('login', fn() => redirect('auth/create'))->name('login');
Route::resource('auth', AuthController::class)->only(['create', 'store']);

Route::delete('logout', fn() => redirect('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])->name('auth.destroy');

Route::middleware('auth')->group(function () {
    Route::resource('jobs.application', JobApplicationController::class)->only('create', 'store');
    Route::resource('my-job-applications', MyJobApplicationController::class);
});
