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
    public function store(CustomerRequest $Request){
        Customer::create($Request->all());
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
      return redirect()->route('customer.index');
    }
    public function destroy($id){
        Customer::destroy($id);
      return redirect()->route('customer.index');
    }
    public function edit($id){
        $customer=Customer::find($id);
      return view('dashbroad.customer-edit',compact('customer'));
    }
}
