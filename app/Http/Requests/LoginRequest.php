<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function attributes()
    {
        return [
            'email' => 'ایمیل',
            'password'=>'رمز ورود'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:5']
        ];
    }

    public function messages(){
        return [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد',
            'email' => 'ایمیل با فرمت معتبر وارد کنید.'
        ];
    }

}
