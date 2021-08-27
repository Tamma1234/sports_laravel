<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
    public function attributes()
    {
        return [
            'name'=> 'Danh mục',
        ];
    }

    public function rules()
    {
        return [
           'name'=> 'required|unique:categories,name',
        ];
    }

    public function messages()
    {
        return [
           'required'=> ':attributeKhông được để trống',
           'unique'=> 'Danh mục đã tồn tại',
        ];
    }
}
