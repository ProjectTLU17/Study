<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Products;
class ProductsController extends Controller
{
  public function index(){
    $products=Products::all();
    return view('dashbroad.products-index',compact('products'));
  }
  public function store(ProductsRequest $Request){
    $products=new Products;
    $products->sup_id=$Request->sup_id;
    $products->cate_id=$Request->cate_id;
    $products->name=$Request->name;
    $products->address=$Request->address;
    $products->details=$Request->details;
    $products->picture=$Request->picture;
    $products->price=$Request->price;
    $products->status=$Request->status;
    $products->save();
    return redirect()->route('products.index');
  }
  public function create(){
    return view('dashbroad.products-create');
  }
  public function show($id){
    $products=Products::find($id);
    return view('dashbroad.products-details',compact('products'));
  }
  public function update($id,ProductsRequest $Request){
      $products=Products::find($id);
      $products->sup_id=$Request->sup_id;
      $products->cate_id=$Request->cate_id;
      $products->name=$Request->name;
      $products->address=$Request->address;
      $products->details=$Request->details;
      $products->picture=$Request->picture;
      $products->price=$Request->price;
      $products->status=$Request->status;
      $products->save();
      return redirect()->route('products.index');
  }
  public function destroy($id){
    $products=Products::findorFail($id);
    $products->delete();
    return redirect()->route('products.index');
  }
  public function edit($id){
    $products=Products::find($id);
    return view('dashbroad.products-edit',compact('products'));
  }
}
