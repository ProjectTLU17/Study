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
        case 'POST':{
          return [
            'cus_id'=>'required|exists:customer,id',
          'emp_id'=>'required|exists:employee,id',
          'prodt_id'=>'required|exists:product,id',
          'details'=>'required',
          'startdate'=>'required|date',
          'expdate'=>'date|nullable',
          'status'=>'required',
        ];
        }
        case 'PUT':{
          return [
            'cus_id'=>'required|exists:customer,id',
            'emp_id'=>'required|exists:employee,id',
            'prodt_id'=>'required|exists:product,id',
            'details'=>'required',
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
        'cus_id.required'=>'Chưa chọn khách hàng',
        'cus_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'emp_id.required'=>'Chưa chọn nhân viên xử lí',
        'emp_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'prodt_id.required'=>'Chưa chọn sản phẩm',
        'prodt_id.exists'=>'ID không có trong Cơ sở dữ liệu',
        'details.required'=>'Vui lòng nhập thông tin mô tả',
        'startdate.required'=>'Vui lòng nhập ngày bắt đầu hợp đồng',
        'startdate.date'=> 'Định dạng ngày phải là YYYY/MM/DD',
        'expdate.date'=> 'Định dạng ngày phải là YYYY/MM/DD',
        'status.required'=>'Vui lòng nhập trạng thái sản phẩm',
      ];
    }
}
