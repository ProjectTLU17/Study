<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SuplierRequest;
use App\Suplier;
class SuplierController extends Controller
{
    public function index(){
      $suplier=Suplier::all();
      return view('dashbroad.suplier-index',compact('suplier'));
    }
    public function store(SuplierRequest $Request){
    $suplier=new Suplier;
    $suplier->name=$Request->name;
    $suplier->address=$Request->address;
    $suplier->phone=$Request->phone;
    $suplier->email=$Request->email;
    $suplier->save();
    return redirect()->route('suplier.index');
  }
  public function create(){
    return view('dashbroad.suplier-create');
  }
  public function show($id){
    $suplier=Suplier::find($id);
    return view('dashbroad.suplier-details',compact('suplier'));
  }
  public function update($id,SuplierRequest $Request){
      $suplier=Suplier::find($id);
      $suplier->name=$Request->name;
      $suplier->address=$Request->address;
      $suplier->phone=$Request->phone;
      $suplier->email=$Request->email;
      $suplier->save();
      return redirect()->route('suplier.index');
  }
  public function destroy($id){
    $suplier=Suplier::findorFail($id);
    $suplier->delete();
    return redirect()->route('suplier.index');
  }
  public function edit($id){
    $suplier=Suplier::find($id);
    return view('dashbroad.suplier-edit',compact('suplier'));
  }

}
