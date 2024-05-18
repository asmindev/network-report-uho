<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Major extends Model
{
    use HasFactory;
    protected $casts = [
        'id' => 'string',
    ];
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = (string) Uuid::uuid4();
        });
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id'); // many to one relationship (one major belongs to one faculty)
    }

    public function report()
    {
        return $this->hasMany(Report::class, 'major_id'); // one to many relationship (one major has many reports)
    }

    public function user()
    {
        return $this->belongsTo(User::class); // one to one relationship (one major has one user)
    }
}
