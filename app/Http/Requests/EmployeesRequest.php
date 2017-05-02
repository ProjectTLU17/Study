<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
         return [
             'name'=>'required|alpha',
             'birthday'=>'date'
             'phone'=>'required|numeric',
             'email'=>'email',
         ];
     }
     public function messages(){
       return [
         'name.required'=>'Vui lòng nhập họ và tên',
         'name.alpha'=>'Tên chỉ bao gồm các kí tự alphabelt',
         'birthday.date'=>'Trường nhập vào phải là kiểu YYYY/MM/DD',
         'phone.required'=>'Vui lòng nhập số điện thoại',
         'phone.numeric'=>'Số điện thoại sai định dạng',
         'email.email'=>'Đây không phải là email',
       ];
     }
}
