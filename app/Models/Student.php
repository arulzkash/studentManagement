<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    // use SoftDeletes;
    //


    public function scopeMale($query, $age = 25)
    {
        return $query->where('gender', 'm')
            ->where('age', $age);
    }

    public function scopeFemale($query, $age = 25)
    {
        return $query->where('gender', 'f')
            ->where('age', $age);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function className()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subjects::class, 'grades', 'student_id', 'subject_id')
            ->withPivot('grade')
            ->withTimestamps()
        ;
    }

    public function teacher()
    {
        return $this->hasOneThrough(
            Teachers::class,
            Classes::class,
            'id', // Foreign key on Classes table...
            'id', // Foreign key on Teachers table...
            'class_id', // Local key on Students table...
            'teacher_id' // Local key on Classes table...
        );
    }

    public function images()
    {
        return $this->morphMany(Images::class, 'imageable');
    }

    public function grades()
    {
        return $this->hasMany(Grades::class, 'student_id');
    }
}
