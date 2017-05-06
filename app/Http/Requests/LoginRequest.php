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
     /**
      * Get the validation rules that apply to the request.
      *
      * @return array
      */
     public function rules()
     {
       switch ($this->method()) {
         case 'POST':{
           return [
             'username'=>'required|exists:users,username',
             'password'=>'required',
           ];
         }
         case 'PUT':{
           return [
             'username'=>'required|exists:users,username',
             'password'=>'required',
           ];
         }
         default:
           # code...
           break;
       }
     }
     public function messages(){
       return[
         'username.required'=>'Vui lòng nhập tên tài khoản',
         'password.required'=>'Vui lòng nhập mật khẩu',
         'username.exists'=>'Sai tên tài khoản hoặc mật khẩu',
       ];
     }
}
