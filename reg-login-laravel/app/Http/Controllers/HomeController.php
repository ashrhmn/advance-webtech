<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = [
            (object) array("id" => 1, "name" => "Object Oriented Programming", "instructor" => "Mr David", "duration" => "5 weeks"),
            (object) array("id" => 2, "name" => "Object Oriented Programming 2", "instructor" => "Md Tanvir Ahmed", "duration" => "4 weeks"),
            (object) array("id" => 3, "name" => "Web Technologies", "instructor" => "Md Sazzad Hossain", "duration" => "6 weeks"),
            (object) array("id" => 4, "name" => "Artificial Intelligence", "instructor" => "Md Rayhan Uddin", "duration" => "3 weeks"),
        ];
        return view('home.index')->with('courses', $courses);
    }
    public function contactUs()
    {
        $contacts = [
            (object) array("name" => "Tanvir Ahmed", "role" => "Developer", "email" => "t.a@st.edu"),
            (object) array("name" => "Rayhan Uddin", "role" => "Co-ordinator", "email" => "r.u@st.edu"),
            (object) array("name" => "Mushfiq Rahman", "role" => "Manager", "email" => "ms@st.edu")
        ];
        return view('home.contactUs')->with('contacts', $contacts);
    }
    public function login()
    {
        return view('home.login');
    }
    public function getCourse($id, $name, $instructor, $duration)
    {
        $course = (object) array("id" => $id, "name" => $name, "instructor" => $instructor, "duration" => $duration);
        return view('home.courseDetails')->with('course', $course);
    }
}
