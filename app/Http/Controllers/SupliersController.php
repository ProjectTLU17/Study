<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SupliersRequest;
use App\Supliers;
class SupliersController extends Controller
{
    public function index(){
      $supliers=Supliers::all();
      return view('dashbroad.supliers-index',compact('supliers'));
    }
    public function store(SupliersRequest $Request){
    $supliers=new Supliers;
    $supliers->name=$Request->name;
    $supliers->address=$Request->address;
    $supliers->phone=$Request->phone;
    $supliers->email=$Request->email;
    $supliers->save();
    return redirect()->route('dashbroad.supliers-index');
  }
  public function create(){
    return view('dashbroad.supliers-create');
  }
  public function show($id){
    $supliers=Supliers::find($id);
    return view('dashbroad.supliers-details',compact('supliers'));
  }
  public function update($id,SupliersRequest $Request){
      $supliers=Supliers::find($id);
      $supliers->name=$Request->name;
      $supliers->address=$Request->address;
      $supliers->phone=$Request->phone;
      $supliers->email=$Request->email;
      $supliers->save();
      return redirect()->route('dashbroad.supliers-index');
  }
  public function destroy($id){
    $supliers=Supliers::findorFail($id);
    $supliers->delete();
    return redirect()->route('dashbroad.supliers-index');
  }
  public function edit($id){
    $supliers=Supliers::find($id);
    return view('dashbroad.supliers-edit',compact('supliers'));
  }

}
