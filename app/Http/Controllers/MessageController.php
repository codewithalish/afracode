<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $request->validate([
            'name' => ['required','string','max:10'],
            'email' => ['required','email'],
            'body' => ['required','string','min:3'],
        ]);


        $inputs=$request->only('name','email','body');
        Message::create($inputs);
        return redirect('contact')->with('success','با موفقیت ارسال شد');
    }

}
