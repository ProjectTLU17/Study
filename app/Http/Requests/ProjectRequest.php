<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ProjectRequest extends FormRequest
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
             'name'=>'required|unique:project,name',
             'decription'=>'nullable',
             'startdate'=>'date|nullable',
             'expdate'=>'date|nullable',
           ];
         }
         case 'PUT':{
           return [
             'name'=>'required',
             'decription'=>'nullable',
             'startdate'=>'date|nullable',
             'expdate'=>'date|nullable',
           ];
         }
         default:
           # code...
           break;
       }
     }
     public function messages(){
       return [
         'name.required'=>'Vui lòng nhập tên dự án',
         'name.unique'=>'Tên dự án bị trùng',
         'startdate.date'=>'Định dạng nhập vào phải là kiểu Date',
         'expdate.date'=>'Định dạng nhập vào phải là kiểu Date',
       ];
     }
}
