<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
       switch($this->method())
    {
        case 'POST':
        {
           return [
                'name'=>'required',
                'username'=>'required|unique:users,username',
                'password'=>'required',
                'role'=>'required',
                'birthday'=>'date|nullable',
                'phone'=>'nullable',
                'phone'=>'numeric|nullable',
                'email'=>'email|nullable',
           ];
         }
         case 'PUT':
         {
           return [
                'name'=>'required',
                'password'=>'required',
                'role'=>'required',
           ];
         }
         default:break;
     }
   }
     public function messages(){
       return[
         'name.required'=>'Vui lòng nhập họ và tên',
         'name.alpha'=>'Tên chỉ bao gồm các kí tự alphabelt',
         'username.required'=>'Vui lòng nhập tên tài khoản',
         'username.unique'=>'Tên tài khoản đã được sử dụng',
         'password.required'=>'Vui lòng nhập mật khẩu',
         'role.required'=>'Vui lòng nhập chức vụ',
         'phone.numeric'=>'Số điện thoại sai định dạng',
         'email.email'=>'Đây không phải là email',
       ];
     }
}
