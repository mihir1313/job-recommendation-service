<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{ 
    use HasFactory;

    protected $fillable = [
        'name',
        'experience_level',
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function preferences()
    {
        return $this->hasOne(Preference::class);
    }
}
