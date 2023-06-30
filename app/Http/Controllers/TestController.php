<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test(Request $request){
        $request->session()->put([
            "alert"=>"Success",
            "shya"=>"1"]);
    }
    public function test1(Request $request){
        $request->session()->forget("name");
        dd($request->session()->all());
    }
    //
//    public function getLogin(Request $request){
//        return view("test");
//    }
//    public function postLogin(Request $request){
//        $request->session()->put("name","shya");
//        $rule = [
//            "email"=>"email|required",
//            "password"=>"required|min:3|max:6",
//        ];
//
//        $message = [
//            "email.required"=>"Tai khoan khong duoc de trong",
//            "email.email"=>"Tai khoan khong hop le",
//            "password.required"=>"Mat khau khong duoc de trong",
//            "password.min"=>"Toi thieu 3 ki tu",
//            "password.max"=>"Toi thieu 6 ki tu",
//        ];
//
//        $request->validate($rule,$message);
//    }
}
