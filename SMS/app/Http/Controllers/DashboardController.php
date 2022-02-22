<?php

namespace App\Http\Controllers;

use App\Models\RegUser;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
    }
    public function index(Request $req)
    {
        $username = $req->session()->get('user');
        $user = RegUser::where('username', $username)->first();
        if ($user && $user->role) {
            return view('dashboard.' . $user->role)->with('user', $user);
        } else {
            return redirect()->route('loginPage');
        }
    }
}
