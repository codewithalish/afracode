<?php

namespace App\Http\Controllers;
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

    public function checkLogin(Request $request)
    {
        $data = $request->all();

        $rules = [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:5']
        ];

        $messages = [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد شما باید حداقل :min تا کاراکتر داشته باشد',
            'email' => 'ایمیل با فرمت معتبر وارد کنید.'
        ];
        // روش اول
        // $request->validate($rules);

        //روش دوم
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

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

   public function register(Request $request){

       $data = $request->all();

       $rules = [
           'name'=>['required','string' ],
           'email'=>['required', 'email'],
           'password'=>['required', 'string' , 'min:5']
       ];

       $messages = [
           'required' => ' فیلد :attribute اجباری است',
           'min' => 'فیلد شما باید حداقل :min تا کاراکتر داشته باشد',
           'email'=>'ایمیل با فرمت معتبر وارد کنید.'
       ];
       // روش اول
       // $request->validate($rules);

       //روش دوم
       $validator = Validator::make($data, $rules, $messages);

       if($validator->fails()){
           return back()->withErrors($validator);
       }
       $inputs=$request->only('name','email','password');
       $inputs['password']=Hash::make($inputs['password']);
       User::create($inputs);
       return redirect('/login')->with('success','با موفقیت ثبت شد');
   }

}
