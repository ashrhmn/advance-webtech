<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //
    public function create()
    {
        $departments = Department::all();
        return view('student.create')->with('departments', $departments);
    }
    //
    public function submit(Request $req)
    {
        $st = new Student();
        $st->name = $req->name;
        $st->user_id = $req->user_id;
        $st->d_id = $req->d_id;
        $st->username = $req->username;
        $st->password = $req->password;
        $st->dob = $req->dob;
        $st->cgpa = $req->cgpa;
        $st->save();
        $students = Student::all();
        return view('student.get')->with('students', $students);
    }
    public function edit()
    {
        return view('student.edit');
    }
    public function get()
    {
        $students = Student::all();
        return view('student.get')->with('students', $students);
    }
    public function getOne(Request $req)
    {
        $student = Student::where('id', '=', decrypt($req->id))->first();
        return view('student.getOne')->with('student', $student);
    }
}
