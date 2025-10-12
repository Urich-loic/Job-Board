<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsBoard extends Model
{
    /** @use HasFactory<\Database\Factories\JobsBoardFactory> */
    use HasFactory;

    protected $guarded = [];

    public static $experienceLevels = ['Entry Level', 'Mid Level', 'Senior Level'];
    public static $category = [
        'IT',
        'Finance',
        'Healthcare',
        'Education',
        'Agriculture',
        'Transportation',
        'Retail',
        'Manufacturing',
        'Construction',
        'Hospitality',
        'Software',
        'Marketing',
        'Sales',
        'Customer Service',
        'Human Resources',
        'Engineering',
        'Legal',
        'Real Estate',
        'Media',
        'Arts'
    ];
}
