<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContractRequest;
use App\Contract;
class ContractController extends Controller
{
  public function index(){
    $contract=Contract::all();
    return view('dashbroad.contract-index',compact('contract'));
  }
  public function store(ContractRequest $Request){
    $contract=new Contract;
    $contract->cus_id=$Request->cus_id;
    $contract->emp_id=$Request->emp_id;
    $contract->prodt_id=$Request->prodt_id;
    $contract->details=$Request->details;
    $contract->startdate=$Request->startdate;
    $contract->expdate=$Request->expdate;
    $contract->status=$Request->status;
    $contract->save();
    return redirect()->route('contract.index');
  }
  public function create(){
    return view('dashbroad.contract-create');
  }
  public function show($id){
    $contract=Contract::find($id);
    return view('dashbroad.contract-details',compact('contract'));
  }
  public function update($id,ContractRequest $Request){
      $contract=Contract::find($id);
      $contract->cus_id=$Request->cus_id;
      $contract->emp_id=$Request->emp_id;
      $contract->prodt_id=$Request->prodt_id;
      $contract->details=$Request->details;
      $contract->startdate=$Request->startdate;
      $contract->expdate=$Request->expdate;
      $contract->status=$Request->status;
      $contract->save();
      return redirect()->route('contract.index');
  }
  public function destroy($id){
    $contract=Contract::findorFail($id);
    $contract->delete();
    return redirect()->route('contract.index');
  }
  public function edit($id){
    $contract=Contract::find($id);
    return view('dashbroad.contract-edit',compact('contract'));
  }
}
