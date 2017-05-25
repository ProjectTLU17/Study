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
    Contract::create($Request->all());
    return redirect()->route('contract.index');
  }
  public function create(){
    $customer=Customer::all();
    $product=Product::all();
    return view('dashbroad.contract-create',compact(['customer','product']));
  }
  public function CreateFromProduct($id){
    $customer=Customer::all();
    $product=Product::find($id);
    return view('dashbroad.contract-create',compact(['customer','product']));
  }
  public function show($id){
    $contract=Contract::find($id);
    return view('dashbroad.contract-details',compact('contract'));
  }
  public function update($id,ContractRequest $Request){
      Contract::updateOrCreate(['id'=>$id],$Request->all());
      return redirect()->route('contract.index');
  }
  public function destroy($id){
    $contract=Contract::destroy($id);
    return redirect()->route('contract.index');
  }
  public function edit($id){
    $contract=Contract::with(['product','user','customer'])->where('id',$id)->first();
    return view('dashbroad.contract-edit',compact('contract'));
  }
}
