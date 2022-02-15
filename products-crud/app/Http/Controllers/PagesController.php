<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login()
    {
        return view('home.login');
    }
    public function submitLogin(Request $req)
    {
        $req->validate(
            [
                'username' => 'required|min:5',
                'password' => 'required',
            ]
        );
        return $req;
    }
}
