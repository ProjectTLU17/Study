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
            'suplier_id'=>'required',
            'category_id'=>'required',
            'land_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'decription'=>'required',
            'price'=>'required|numeric',
            'status'=>'required',
          ];
        }
        case 'PUT':{
          return [
            'suplier_id'=>'required',
            'category_id'=>'required',
            'land_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'decription'=>'required',
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
        'suplier_id.required'=>'Chưa chọn nhà cung cấp',
        'land_id.required'=>'Chưa chọn lô',
        'category_id.required'=>'Chưa chọn danh mục',
        'name.required'=>'Vui lòng nhập tên sản phẩm',
        'address.required'=>'Vui lòng nhập địa chỉ',
        'decription.required'=>'Vui lòng nhập thông tin mô tả',
        'price.required'=>'Vui lòng nhập giá sản phẩm',
        'price.numeric'=>'Giá tiền phải là số',
        'status.required'=>'Vui lòng nhập trạng thái sản phẩm',
      ];
    }
}
