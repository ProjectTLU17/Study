<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContractRequest;
use App\Contract;
use App\customer;
use App\product;
class ContractController extends Controller
{
  public function index(){
    $contract=Contract::all();
    return view('dashbroad.contract-index',compact('contract'));
  }
  public function store(ContractRequest $Request){
    Contract::create($Request->all());
    Product::updateOrCreate(['id'=>$Request->product_id],['status'=>'pending']);
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
      if ($Request->type=='rent' && $Request->status=='active') {
        Product::updateOrCreate(['id'=>$Request->product_id],['status'=>'rent']);
      }elseif ($Request->type=='sell' && $Request->status=='done') {
        Product::updateOrCreate(['id'=>$Request->product_id],['status'=>'sold']);
      }elseif ($Request->type=='restore' && $Request->status=='done') {
        Product::updateOrCreate(['id'=>$Request->product_id],['status'=>'available']);
      }
      return redirect()->route('contract.index');
  }
  public function destroy($id){
    $contract=Contract::find($id);
    Product::updateOrCreate(['id'=>$contract->product_id],['status'=>'avaliable']);
    $contract=Contract::destroy($id);
    return redirect()->route('contract.index');
  }
  public function edit($id){
    $contract=Contract::with(['product','user','customer'])->where('id',$id)->first();
    return view('dashbroad.contract-edit',compact('contract'));
  }
}
