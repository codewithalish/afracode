<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
   public function login(){

       return view('admin.login');
   }

    public function checkLogin(Request $request)
    {
    $login_field=$request->only(['email','password']);
    $result=auth::attempt($login_field);
    if($result){
        return redirect('admin/dashboard');
    } else{
        return redirect('admin/login')->with('error','نام کاربری یا رمز عبور اشتباه است.');
    }
   }



}
