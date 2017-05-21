<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandRequest extends FormRequest
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
             'project_id'=>'required|exists:project,id',
             'name'=>'required|unique:category,name',
           ];
         }
         case 'PUT':{
           return [
             'project_id'=>'required|exists:project,id',
             'name'=>'required',
           ];
         }
         default:
           # code...
           break;
       }
     }
     public function messages(){
       return [
         'project_id.required'=>'Lô phải thuộc dự án',
         'project_id.exists'=>'Mã dự án không tồn tại',
         'name.required'=>'Vui lòng nhập tên danh mục',
         'name.unique'=>'Tên danh mục bị trùng',
       ];
     }
}
