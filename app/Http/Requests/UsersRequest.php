<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
              'name'=>'required',
             'username'=>'required|unique:users,username',
             'password'=>'required',
             'role'=>'required',
         ];
     }
     public function messages(){
       return[
         'name.required'=>'Vui lòng nhập họ và tên',
         'username.required'=>'Vui lòng nhập tên tài khoản',
         'username.unique'=>'Tên tài khoản đã được sử dụng',
         'password.required'=>'Vui lòng nhập mật khẩu',
         'role.required'=>'Vui lòng nhập chức vụ',
       ];
     }
}
