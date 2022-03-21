<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //

    public function getAll()
    {
        $departments = Department::all();
        foreach ($departments as $department) {
            $department->courses = $department->courses;
        }
        return response($departments, 200);
    }

    public function getOne($id)
    {
        $department = Department::where('id', $id)->first();
        if (!$department) return response("Department not found", 404);
        $department->courses = $department->courses;
        return response($department, 200);
    }

    public function addOne(Request $req)
    {
        $department = new Department();
        $department->name = $req->name;
        $department->save();
        return response($department, 201);
    }

    public function updateOne(Request $req)
    {
        $department = Department::where('id', $req->id)->first();
        if (!$department) return response('Department not found', 404);
        $department->name = $req->name;
        $department->save();
        $department->courses = $department->courses;
        return response($department, 201);
    }

    public function deleteOne($id)
    {
        $department = Department::where('id', $id)->first();
        if (!$department) return response("Department not found", 404);
        $flag = $department->delete();
        if ($flag) return response("Deleted successfully", 201);
        return response("Delete failed", 401);
    }
}
