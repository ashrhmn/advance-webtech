<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;

    protected $table = "course_students";

    public function course()
    {
        return $this->belongsTo(Course::class, 'c_id');
    }

    public function department()
    {
        return $this->belongsTo(Course::class, 'offered_by');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'st_id');
    }
}
