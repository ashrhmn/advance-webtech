<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function getOne(Request $req)
    {
        $course = Course::where('id', $req->id)->first();
        return $course;
    }
}
