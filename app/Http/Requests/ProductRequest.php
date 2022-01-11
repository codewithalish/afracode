<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'نام کالا',
            'description'=>'توضیحات',
            'price'=>'قیمت',
            'details'=>'جزعیات',

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
            'title'=>['required','string','min:5' ],
            'description'=>['required','min:30'],
            'price'=>['required'],
            'image_path'=>['string'],
            'details'=>['required', 'string','min:50']

        ];
    }

    public function messages()
    {
        return [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد',
        ];
    }
}
