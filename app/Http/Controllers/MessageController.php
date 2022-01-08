<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $data = $request->all();

        $rules = [
            'name'=>['required','string' , 'max:10', 'min:8'],
            'email'=>['required', 'email'],
            'body'=>['required', 'string' , 'min:5']
        ];

        $messages = [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد شما باید حداقل :min تا کاراکتر داشته باشد'
        ];
        // روش اول
       // $request->validate($rules);

        //روش دوم
        $validator = Validator::make($data, $rules, $messages);





        if($validator->fails()){
            return back()->withErrors($validator);
        }




        $inputs=$request->only('name','email','body');
        Message::create($inputs);
        return redirect('contact')->with('success','با موفقیت ارسال شد');
    }

}
