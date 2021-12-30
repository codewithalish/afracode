<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeviceController extends Controller
{
    //

    public function welcome()
    {
        $query=\App\Models\Service::limit(3)->get();
        return view('pages.welcome' , ['items'=>$query]);

    }
}
