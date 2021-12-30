<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
   public function login(){

       return view('admin.login');
   }

    public function checkLogin(Request $request)
    {
      $query=$request->only(['email','password']) ;
      return $query;
   }
}
