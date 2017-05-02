<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeesRequest;
use App\Employees;
class EmployeesController extends Controller
{
  public function index(){
    $employees=Employees::all();
    return view('dashbroad.employees-index',compact('employees'));
  }
  public function store(EmployeesRequest $Request){
    $employees=new Employees;
    $employees->name=$Request->name;
    $employees->address=$Request->address;
    $employees->phone=$Request->phone;
    $employees->email=$Request->email;
    $employees->save();
    return redirect()->route('dashbroad.employees-index');
  }
  public function create(){
    return view('dashbroad.employees-create');
  }
  public function show($id){
    $employees=Employees::find($id);
    return view('dashbroad.employees-details',compact('employees'));
  }
  public function update($id,EmployeesRequest $Request){
      $employees=Employees::find($id);
      $employees->name=$Request->name;
      $employees->address=$Request->address;
      $employees->phone=$Request->phone;
      $employees->email=$Request->email;
      $employees->save();
      return redirect()->route('dashbroad.employees-index');
  }
  public function destroy($id){
    $employees=Employees::findorFail($id);
    $employees->delete();
    return redirect()->route('dashbroad.employees-index');
  }
  public function edit($id){
    $employees=Employees::find($id);
    return view('dashbroad.employees-edit',compact('employees'));
  }
}
