<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Department::class, 'id');
    }

    public function courseStudentMaps()
    {
        return $this->hasMany(CourseStudent::class, 'c_id');
    }
}
