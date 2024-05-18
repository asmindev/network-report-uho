<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function majors()
    {
        return $this->hasMany(Major::class, 'faculty_id'); // one to many relationship (one faculty has many majors)
    }
}
