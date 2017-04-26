<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Duyrequest extends FormRequest
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
              'txtHoten'=>'required|unique:category,name',
              'img'=>'image|max:15'
        ];
    }
    public function messages(){
      return ['txtHoten.required'=>'Vui lòng nhập tên môn học',
      'txtHoten.unique'=>'Trùng dữ liệu'];
    }
}
