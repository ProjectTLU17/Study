<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Customer;
class CustomerController extends Controller
{
    public function index(){
      $customer=Customer::all();
      return view('dashbroad.customer-index',compact('customer'));
    }
    //hehahahs
    public function store(CustomerRequest $Request){
        Customer::create($Request->all());
        session()->flash('alert-success', 'Thêm mới thành công!');
      return redirect()->route('customer.index');
  }
    public function create(){
      return view('dashbroad.customer-create');
    }
    public function show($id){
        $customer=Customer::find($id);
      return view('dashbroad.customer-details',compact('customer'));
    }
    public function update(CustomerRequest $Request,$id){
        Customer::updateOrCreate(['id'=>$id],$Request->all());
        session()->flash('alert-success', 'Cập nhật thành công!');
      return redirect()->route('customer.edit',$id);
    }
    public function destroy($id){
        Customer::destroy($id);
        session()->flash('alert-danger', 'Xóa thành công!');
      return redirect()->route('customer.index');
    }
    public function edit($id){
        $customer=Customer::find($id);
      return view('dashbroad.customer-edit',compact('customer'));
    }
}
