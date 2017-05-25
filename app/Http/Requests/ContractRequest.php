<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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
          'customer_id'=>'required|exists:customer,id',
          'users_id'=>'required|exists:users,id',
          'product_id'=>'required|exists:product,id',
          'decription'=>'required',
          'startdate'=>'required|date',
          'expdate'=>'date|nullable',
          'status'=>'required',
        ];
        }
        case 'PUT':{
          return [
            'customer_id'=>'required|exists:customer,id',
            'users_id'=>'required|exists:employee,id',
            'product_id'=>'required|exists:product,id',
            'decription'=>'required',
            'startdate'=>'required|date',
            'expdate'=>'date|nullable',
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
        'customer_id.required'=>'Chưa chọn khách hàng',
        'customer_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'users_id.required'=>'Chưa chọn nhân viên xử lí',
        'users_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'product_id.required'=>'Chưa chọn sản phẩm',
        'product_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'decription.required'=>'Vui lòng nhập thông tin mô tả',
        'startdate.required'=>'Vui lòng nhập ngày bắt đầu hợp đồng',
        'startdate.date'=> 'Định dạng ngày phải là YYYY/MM/DD',
        'expdate.date'=> 'Định dạng ngày phải là YYYY/MM/DD',
        'status.required'=>'Vui lòng nhập trạng thái sản phẩm',
      ];
    }
}
