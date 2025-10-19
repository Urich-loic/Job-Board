<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
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

    public function hasApplied(Authenticatable|User|int $user){
        return $this->where('id',$this->id)->whereHas('jobApplications', function (Builder $query) use ($user) {
            $query->where('user_id', '=',   $user->id ?? $user);
        })->exists();
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

    public function scopeFilter(\Illuminate\Database\Eloquent\Builder|QueryBuilder $query, array $filters)
    {
        return $query->when($filters['search'] ?? null, function ( $query, $search) {
            $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhereHas('company_name', function (\Illuminate\Database\Eloquent\Builder $query) use ($search) {
                        $query->where('company_name', 'like', '%' . $search . '%');

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
