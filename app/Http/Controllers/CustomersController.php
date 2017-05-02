<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomersRequest;
use App\Customers;
class CustomersController extends Controller
{
    public function index(){
      $customers=Customers::all();
      return view('dashbroad.customers-index',compact('customers'));
    }
    public function store(CustomersRequest $Request){
    $customers=new Customers;
    $customers->name=$Request->name;
    $customers->phone=$Request->phone;
    $customers->email=$Request->email;
    $customers->save();
    return redirect()->route('customers.index');
  }
  public function create(){
    return view('dashbroad.customers-create');
  }
  public function show($id){
    $customers=Customers::find($id);
    return view('dashbroad.customers-details',compact('customers'));
  }
  public function update($id,CustomersRequest $Request){
      $customers=Customers::find($id);
      $customers->name=$Request->name;
      $customers->phone=$Request->phone;
      $customers->email=$Request->email;
      $customers->save();
      return redirect()->route('customers.index');
  }
  public function destroy($id){
    $customers=Customers::findorFail($id);
    $customers->delete();
    return redirect()->route('customers.index');
  }
  public function edit($id){
    $customers=Customers::find($id);
    return view('dashbroad.customers-edit',compact('customers'));
  }

}
