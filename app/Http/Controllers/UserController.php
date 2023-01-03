<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage()
    {
        return view("user.login");
    }

    public function login(Request $request)
    {

        $login = Auth::attempt($request->only("username", "password"));
        if ($login)
            return back()->with("success", "تم تسجيل الدخول بنجاح");
        else
            return back()->with("error", "بيانات الدخول غير صحيحة !");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
