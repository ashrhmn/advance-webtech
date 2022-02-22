<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegUser extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function courseStudentMap()
    {
        return $this->hasMany(CourseStudent::class, 'student_id');
    }

    public function teachingCourses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }
}
