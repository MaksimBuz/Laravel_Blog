<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title'=>'required|string',
            'content'=>'string',
            'main_img'=>'file',
            'preview_img'=>'file',
            'category_id'=>'exists:categories,id',
            'tag_ids.*'=>'integer',
        ];
    }
    public function messages()  
    {
        return [
            'title.string'=>'Некоректный тип данных, введите строку',
            'title.required'=>'Обязательно к заполнению',
            'content.string'=>'Некоректный тип данных, введите строку',
            'main_img.file'=>'Укажите фаил',
            'preview_img'=>'Укажите фаил',


        ];
            
     }
    
}
