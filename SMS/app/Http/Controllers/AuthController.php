<?php

namespace App\Http\Controllers;

use App\Models\RegUser;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function registration()
    {
        return view('auth.registration');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function registrationSubmit(Request $req)
    {
        $user = new RegUser();
        $user->username = $req->username;
        $user->name = $req->name;
        $user->password = md5($req->password);
        $user->role = $req->role;
        $user->save();
        return redirect()->route('loginPage');
    }

    public function loginSubmit(Request $req)
    {
        $user = RegUser::where('username', $req->username)->where('password', md5($req->password))->first();
        if ($user) {
            $req->session()->put('user', $user->username);
            return redirect()->route('dashboard');
        } else {
            $req->session()->put('user', null);
            return redirect()->route('loginPage');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('loginPage');
    }
}
