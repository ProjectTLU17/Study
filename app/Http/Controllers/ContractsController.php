<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContractsRequest;
use App\Contracts;
class ContractsController extends Controller
{
  public function index(){
    $contracts=Contracts::all();
    return view('dashbroad.contracts-index',compact('contracts'));
  }
  public function store(ContractsRequest $Request){
    $contracts=new Contracts;
    $contracts->cus_id=$Request->cus_id;
    $contracts->emp_id=$Request->emp_id;
    $contracts->prodt_id=$Request->prodt_id;
    $contracts->details=$Request->details;
    $contracts->startdate=$Request->startdate;
    $contracts->expdate=$Request->expdate;
    $contracts->status=$Request->status;
    $contracts->save();
    return redirect()->route('contracts.index');
  }
  public function create(){
    return view('dashbroad.contracts-create');
  }
  public function show($id){
    $contracts=Contracts::find($id);
    return view('dashbroad.contracts-details',compact('contracts'));
  }
  public function update($id,ContractsRequest $Request){
      $contracts=Contracts::find($id);
      $contracts->cus_id=$Request->cus_id;
      $contracts->emp_id=$Request->emp_id;
      $contracts->prodt_id=$Request->prodt_id;
      $contracts->details=$Request->details;
      $contracts->startdate=$Request->startdate;
      $contracts->expdate=$Request->expdate;
      $contracts->status=$Request->status;
      $contracts->save();
      return redirect()->route('contracts.index');
  }
  public function destroy($id){
    $contracts=Contracts::findorFail($id);
    $contracts->delete();
    return redirect()->route('contracts.index');
  }
  public function edit($id){
    $contracts=Contracts::find($id);
    return view('dashbroad.contracts-edit',compact('contracts'));
  }
}
