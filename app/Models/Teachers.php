<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    //
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function clasess()
    {
        return $this->hasMany(Classes::class, 'teacher_id');
    }

    public function students()
    {
        return $this->hasManyThrough(
            Student::class,
            Classes::class,
            'teacher_id', // Foreign key on Classes table...
            'class_id', // Foreign key on Students table...
        );
    }

    public function images()
    {
        return $this->morphMany(Images::class, 'imageable');
    }
}
