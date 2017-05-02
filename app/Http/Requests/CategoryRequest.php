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
            'name'=>'required|unique:category,name',
            'stock'=>'numeric'
        ];
    }
    public function messages(){
      return [
        'name.required'=>'Vui lòng nhập tên danh mục',
        'name.unique'=>'Tên danh mục bị trùng',
        'stock.numeric'=>'Định dạng nhập vào phải là số',
      ];
    }
}
