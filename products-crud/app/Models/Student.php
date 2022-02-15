<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function department()
    {
        return $this->belongsTo(Department::class, 'd_id');
    }

    public function courseStudentMap()
    {
        return $this->hasMany(CourseStudent::class, 'st_id');
    }
}
