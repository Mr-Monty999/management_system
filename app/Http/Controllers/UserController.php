<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePrivacyRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage()
    {
        return view("users.login");
    }

    public function login(Request $request)
    {

        $login = User::where("username", $request->username)->where("password", $request->password)->first();
        if ($login) {
            Auth::login($login);
            return back()->with("success", "تم تسجيل الدخول بنجاح");
        } else
            return back()->with("error", "بيانات الدخول غير صحيحة !");
    }

    public function logout()
    {
        // return "true";
        Auth::logout();
        return redirect()->route("users.login");
    }
    public function privacy($userId)
    {
        $user = User::find($userId);
        return view("users.privacy", compact("user"));
    }

    public function updatePrivacy(UpdatePrivacyRequest $request, $userId)
    {
        $data = $request->all();
        $user = User::find($userId);
        $user->update($data);

        return back()->with("success", "تم حفظ الإعدادت بنجاح");
    }
}
