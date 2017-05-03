<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
class ProductController extends Controller
{
  public function index(){
    $product=Product::all();
    return view('dashbroad.product-index',compact('product'));
  }
  public function store(ProductRequest $Request){
    $product=new Product;
    $product->sup_id=$Request->sup_id;
    $product->cate_id=$Request->cate_id;
    $product->name=$Request->name;
    $product->address=$Request->address;
    $product->details=$Request->details;
    $product->picture=$Request->picture;
    $product->price=$Request->price;
    $product->status=$Request->status;
    $product->save();
    return redirect()->route('product.index');
  }
  public function create(){
    return view('dashbroad.product-create');
  }
  public function show($id){
    $product=Product::find($id);
    return view('dashbroad.product-details',compact('product'));
  }
  public function update($id,ProductRequest $Request){
      $product=Product::find($id);
      $product->sup_id=$Request->sup_id;
      $product->cate_id=$Request->cate_id;
      $product->name=$Request->name;
      $product->address=$Request->address;
      $product->details=$Request->details;
      $product->picture=$Request->picture;
      $product->price=$Request->price;
      $product->status=$Request->status;
      $product->save();
      return redirect()->route('product.index');
  }
  public function destroy($id){
    $product=Product::findorFail($id);
    $product->delete();
    return redirect()->route('product.index');
  }
  public function edit($id){
    $product=Product::find($id);
    return view('dashbroad.product-edit',compact('product'));
  }
}
