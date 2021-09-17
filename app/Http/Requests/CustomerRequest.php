<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'full_name'=> 'Họ và tên',
            'email'=> 'Email',
            'phone_number'=> 'Số điện thoại',
            'address'=> 'Địa chỉ',
           
        ];
    }

    public function rules()
    {
        return [
           'full_name'=> 'required',
           'email'=> 'required|email:rfc,dns|unique:users,email',
           'phone_number'=> 'required|min:10|numeric',
           'address'=> 'required',
          
        ];
    }

    public function messages()
    {
        return [
           'required'=> ':attribute Không được để trống',
           'email'=> ':attribute không đúng định dạng',
           'min'=> ':attribute phải là 10 số',
           'numeric'=> ':attribute hãy nhập bằng số',
        ];
    }
}
