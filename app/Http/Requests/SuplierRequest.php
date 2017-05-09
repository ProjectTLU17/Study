<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuplierRequest extends FormRequest
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
      switch ($this->method()) {
        case 'POST': {
          return [
            'name'=>'required',
            'phone'=>'required|numeric',
            'email'=>'email|nullable',
          ];
        }
        case 'PUT':{
          return[
            'name'=>'required',
            'phone'=>'required|numeric',
            'email'=>'email|nullable',
          ];
        }
        default:
          break;
      }
    }
    public function messages(){
      return [
        'name.required'=>'Vui lòng nhập họ và tên',
        'phone.required'=>'Vui lòng nhập số điện thoại',
        'phone.numeric'=>'Số điện thoại sai định dạng',
        'email.email'=>'Đây không phải là email',
      ];
    }
}
