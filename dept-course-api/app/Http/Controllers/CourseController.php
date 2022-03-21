<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function getAll()
    {
        $courses = Course::all();
        foreach ($courses as $course) {
            $course->department = $course->department;
        }
        return response($courses, 200);
    }

    public function getOne($id)
    {
        $course = Course::where('id', $id)->first();
        if (!$course) return response("Course not found", 404);
        $course->department = $course->department;
        return response($course, 200);
    }

    public function addOne(Request $req)
    {
        $course = new Course();
        $course->name = $req->name;
        $course->dept_id = $req->dept_id;
        $course->save();
        return response($course, 291);
    }

    public function updateOne(Request $req)
    {
        $course = Course::where('id', $req->id)->first();
        if (!$course) return response('Course not found', 404);
        $course->name = $req->name;
        $course->dept_id = $req->dept_id;
        $course->save();
        $course->department = $course->department;
        return response($course, 201);
    }

    public function deleteOne($id)
    {
        $course = Course::where('id', $id)->first();
        if (!$course) return response("Course not found", 404);
        $flag = $course->delete();
        if ($flag) return response("Deleted successfully", 201);
        return response("Delete failed", 401);
    }
}
