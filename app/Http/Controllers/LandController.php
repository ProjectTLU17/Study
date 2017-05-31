<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LandRequest;
use App\Land;
use App\Project;
class LandController extends Controller
{
  public function index(){
      $project=Project::all();
      $land=Land::with('project')->get();
    return view('dashbroad.land-index',compact(['land','project']));
  }
  public function store(LandRequest $Request){
      $land=Land::create($Request->all());
      session()->flash('alert-success', 'Thêm mới thành công!');
    return redirect()->route('land.index');
  }
  public function create(){
    return view('dashbroad.land-create');
  }
  public function show($id){
      $land=Land::find($id);
    return view('dashbroad.land-details',compact('land'));
  }
  public function update($id,LandRequest $Request){
        Land::updateOrCreate(['id' => $id],$Request->all());
        session()->flash('alert-success', 'Cập nhật thành công!');
      return redirect()->route('land.edit',$id);
  }
  public function destroy($id){
      Land::destroy($id);
      session()->flash('alert-danger', 'Xóa thành công!');
    return redirect()->route('land.index');
  }
  public function edit($id){
      $project=Project::all();
      $land=Land::with('project')->where('id', $id)->first();
    return view('dashbroad.land-edit',compact(['land','project']));
  }
}
