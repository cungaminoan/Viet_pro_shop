<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function getLogin(){
        return view('backend/login');
    }
    public function postLogin(Request $request){
        $rule = [
            "email"=>"email|required",
            "password"=>"required|min:3|max:6",
        ];

        $message = [
            "email.required"=>"Tai khoan khong duoc de trong",
            "email.email"=>"Tai khoan khong hop le",
            "password.required"=>"Mat khau khong duoc de trong",
            "password.min"=>"Toi thieu 3 ki tu",
            "password.max"=>"Toi thieu 6 ki tu",
        ];

        $request->validate($rule,$message);

        if ($request->email == "shyawannalove@gmail.com"&&$request->password == "123456"){
            $request->session()->put("email","shyawannalove@gmail.com");
            return redirect("/admin");
        }
        else{
            return redirect()->back()->withErrors(["error1"=>"Error: Shyawannadie"]);
        }
    }
}
