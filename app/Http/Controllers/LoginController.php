<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
    return view("/login");
    }
    function login(Request $request)
    {
        $this->validate($request, [
            "email"=> "reqiured|email|max:255|users:unique",
            "password"=> "required|min:8|",
            ]);
    }
}
