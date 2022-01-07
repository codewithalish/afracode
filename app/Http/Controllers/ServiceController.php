<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function welcome()
    {
        $query=\App\Models\Product::limit(6)->get();
        return view('pages.welcome' , ['items'=>$query]);

    }
}
