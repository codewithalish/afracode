<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
   public function login(){

       return view('auth.login');
   }

    public function checkLogin(LoginRequest $request)
    {


        $login_field = $request->only(['email', 'password']);
        $result = auth::attempt($login_field);
        if ($result) {
            return redirect('admin');
        } else {
            return redirect('/login')->with('error', 'نام کاربری یا رمز عبور اشتباه است.');
        }
    }



   public function create(){
       return view('auth.register');
   }

   public function register(RegisterRequest $request){


       $inputs=$request->only('name','email','password');
       $inputs['password']=Hash::make($inputs['password']);
       User::create($inputs);
       return redirect('/login')->with('success','با موفقیت ثبت شد');
   }

}
