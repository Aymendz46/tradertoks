<?php

namespace App\Models;

use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'payments');
    }
}
