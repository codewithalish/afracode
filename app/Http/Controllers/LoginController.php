<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
   public function login(){

       return view('auth.login');
   }

    public function checkLogin(Request $request)
    {
    $login_field=$request->only(['email','password']);
    $result=auth::attempt($login_field);
    if($result){
        return redirect('admin');
    } else{
        return redirect('/login')->with('error','نام کاربری یا رمز عبور اشتباه است.');
    }
   }

   public function create(){
       return view('auth.register');
   }

   public function register(Request $request){
       $fields=$request->only('name','email','password');
       $fields['password']=Hash::make($fields['password']);
       User::create($fields);
       return redirect('/login')->with('success','با موفقیت ثبت شدید.');
   }

}
