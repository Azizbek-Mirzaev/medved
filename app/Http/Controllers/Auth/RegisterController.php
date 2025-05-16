<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route("showLoginForm");
        // dd bcrypt('password');
        // dd($user);
        // dd($request->name);
        // dd($_POST); et forma ispolzuetsya v php
        // return view('auth.register');
    }
}
