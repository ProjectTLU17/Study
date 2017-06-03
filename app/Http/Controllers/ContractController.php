<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContractRequest;
use App\Contract;
use App\Customer;
use App\Product;
use App\User;
class ContractController extends Controller
{
  public function index(){
    $contract=Contract::all();
    foreach ($contract as $item) {
      if ($item->type=='rent' && $item->expdate<date("Y-m-d")) {
        Contract::updateOrCreate(['id'=>$item->id],['type'=>'restore','status'=>'pending']);
      }
    }
    return view('dashbroad.contract-index',compact('contract'));
  }
  public function store(ContractRequest $Request){
    Contract::create($Request->all());
    Product::updateOrCreate(['id'=>$Request->product_id],['status'=>'pending']);
    session()->flash('alert-success', 'Thêm mới thành công!');
    return redirect()->route('contract.index');
  }
  public function create(){
    $customer=Customer::all();
    $product=Product::all();
    return view('dashbroad.contract-create',compact(['customer','product']));
  }
  public function CreateFromProduct($id){
    $thisproduct=Product::find($id);
    $customer=Customer::all();
    $product=Product::all();
    return view('dashbroad.contract-create',compact(['customer','product','thisproduct']));
  }
  public function show($id){
    $contract=Contract::find($id);
    return view('dashbroad.contract-details',compact('contract'));
  }
  public function update(ContractRequest $Request,$id){
      Contract::updateOrCreate(['id'=>$id],$Request->all());
      $contract=Contract::find($id);
      if ($contract->type=='rent' && $contract->status=='active') {
        Product::updateOrCreate(['id'=>$contract->product_id],['status'=>'rent']);
      }elseif ($contract->type=='sell' && $contract->status=='done') {
        Product::updateOrCreate(['id'=>$contract->product_id],['status'=>'sold']);
      }elseif ($contract->type=='restore' && $contract->status=='done') {
        Product::updateOrCreate(['id'=>$contract->product_id],['status'=>'available']);
      }
      session()->flash('alert-success', 'Cập nhật thành công!');
      return redirect()->route('contract.edit',$id);
  }
  public function destroy($id){
    $contract=Contract::find($id);
    Product::updateOrCreate(['id'=>$contract->product_id],['status'=>'avaliable']);
    $contract=Contract::destroy($id);
    session()->flash('alert-danger', 'Xóa thành công!');
    return redirect()->route('contract.index');
  }
  public function edit($id){
    $customer=customer::all();
    $user=User::all();
    $contract=Contract::with(['product','user','customer'])->where('id',$id)->first();
    return view('dashbroad.contract-edit',compact(['contract','user','customer']));
  }
}
