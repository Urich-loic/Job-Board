<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    /** @use HasFactory<\Database\Factories\JobApplicationFactory> */
    use HasFactory;

    protected $guarded=[];

    public function jobsBoard(){
        return $this->belongsTo(JobsBoard::class);
    }

     public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
}
