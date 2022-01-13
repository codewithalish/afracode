<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'عنوان',
            'body'=>'توضیحات',
            'details'=>'جزعیات'
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
            'title'=>['required','string','min:5', ],
            'image_path'=>['string'],
            'body'=>['required', 'string','min:40',],
        'details'=>['string','min:50',]
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
