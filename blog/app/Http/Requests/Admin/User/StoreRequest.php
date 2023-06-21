<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'string|required',
            'email'=>'string|email',
            'password'=>'string',
            'role'=>'string',
        ];
    }
    public function messages()  
    {
        return [
            'name.string'=>'Некоректный тип данных, введите строку',
            'name.required'=>'Обязательно к заполнению',
            'email.email'=>'Некоректный тип данных, введите почту',
            
        ];
            
     }
}
