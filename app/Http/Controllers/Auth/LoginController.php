<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // dd('login_page');
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request);
        // return view('auth.login');
        Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect()->route("admin");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
        // dd('logout');
    }
}
