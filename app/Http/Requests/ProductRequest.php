<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'sup_id'=>'required|exists:supliers,id',
            'cat_id'=>'required|exists:category,id',
            'name'=>'required',
            'address'=>'required',
            'details'=>'required',
            'images'=>'required|image'
            'price'=>'required|numeric',
            'status'=>'required',
          ];
        }
        case 'PUT':{
          return [
            'sup_id'=>'required|exists:supliers,id',
            'cat_id'=>'required|exists:category,id',
            'name'=>'required',
            'address'=>'required',
            'details'=>'required',
            'picture'=>'required|image'
            'price'=>'required|numeric',
            'status'=>'required',
          ];
        }
        default:
          # code...
          break;
      }
    }
    public function messages(){
      return [
        'sup_id.required'=>'Chưa chọn nhà cung cấp',
        'sup_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'cat_id.required'=>'Chưa chọn danh mục',
        'cat_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'name.required'=>'Vui lòng nhập tên sản phẩm',
        'address.required'=>'Vui lòng nhập địa chỉ',
        'details.required'=>'Vui lòng nhập thông tin mô tả',
        'price.required'=>'Vui lòng nhập giá sản phẩm',
        'price.numeric'=>'Giá phải là số',
        'status.required'=>'Vui lòng nhập trạng thái sản phẩm',
      ];
    }
}
