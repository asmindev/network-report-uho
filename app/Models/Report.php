<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Report extends Model
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

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id'); // many to one relationship (one report belongs to one major)
    }
}
