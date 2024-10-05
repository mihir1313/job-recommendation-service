<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'company',
        'location',
        'job_type',
        'required_skills',
        'experience_level',
    ];

    protected $casts = [
        'required_skills' => 'array', 
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_skill', 'job_id', 'skill_id');
    }
}
