<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'desired_roles',
        'locations',
        'job_type',
    ];

    protected $casts = [
        'desired_roles' => 'array',  
        'locations' => 'array',      
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
