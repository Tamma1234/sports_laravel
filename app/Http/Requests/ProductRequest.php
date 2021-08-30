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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title'=> 'Tiêu đề',
            'price'=> 'Giá ',
            'category_id'=> 'Danh mục ',
            'is_active'=> 'Trạng thái',
            'color_id'=> 'Màu',
            'image_url' => 'Ảnh đại diện',
            'size' => 'Size',
        ];
    }

    public function rules()
    {
        return [
           'title'=> 'required|unique:products,title',
           'price' => 'required|min:0', 
           'description' => 'required|max:225',
           'category_id'=> 'required',
           'image_url' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
           'size' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute phải ít hơn 225 kí tự',
            'mimes' => ':attribute định dạng jpg, png, jpeg,...',
            'image_url.max' => ':attribute nhỏ hơn 2mb',
            'min' => ':attribute sản phẩm lớn hơn 0',
            'unique'=> 'Danh mục đã tồn tại',
        ];
    }
}
