<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function student()
    {
        return view('dashboard.student');
    }
    public function admin()
    {
        return view('dashboard.admin');
    }
}
