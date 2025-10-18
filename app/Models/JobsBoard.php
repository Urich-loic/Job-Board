<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class JobsBoard extends Model
{
    /** @use HasFactory<\Database\Factories\JobsBoardFactory> */
    use HasFactory;

    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }


    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }


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

    public function scopeFilter(Builder | QueryBuilder $query, array $filters): Builder | QueryBuilder
    {
        return $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where($search, 'like', '%' . request('search') . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhereHas('company_name', function ($query) use ($search) {
                        $query->where('company_name', 'like', '%' . $search . '%');
                    });
            });
        })->when($filters['minSalary'] ?? null, function ($query, $minSalary) {
            $query->where('salary', '>=', $minSalary);
        })->when($filters['maxSalary'] ?? null, function ($query, $maxSalary) {
            $query->where('salary', '<=', $maxSalary);
        })->when($filters['experience'] ?? null, function ($query, $experience) {
            $query->where('experience',  $experience);
        })->when($filters['category'] ?? null, function ($query, $category) {
            $query->where('category',  $category);
        });
    }
}
