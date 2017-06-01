<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;
class HocSinhController extends Controller
{
  public function index(){
    $hocsinh=HocSinh::all();
    return view('restful.list',compact('hocsinh'));
  }
  public function store(Request $Request){
    $hocsinh=new HocSinh;
    $hocsinh->hoten=$Request->txtHoTen;
    $hocsinh->toan=$Request->txtToan;
    $hocsinh->ly=$Request->txtLy;
    $hocsinh->hoa=$Request->txtHoa;
    $hocsinh->save();
    return redirect()->route('restful.index');
  }
  public function create(){
    return view('restful.add');
  }
  public function show($id){
    echo "đây là dòng dữ liệu thứ $id";
  }
  public function update($id,Request $Request){
      $hocsinh=HocSinh::find($id);
      $hocsinh->hoten=$Request->txtHoTen;
      $hocsinh->toan=$Request->txtToan;
      $hocsinh->ly=$Request->txtLy;
      $hocsinh->hoa=$Request->txtHoa;
      $hocsinh->save();
      return redirect()->route('restful.index');
  }
  public function destroy($id){
    $hocsinh=HocSinh::findorFail($id);
    $hocsinh->delete();
    return redirect()->route('restful.index');
  }
  public function edit($id){
    $hocsinh=HocSinh::find($id);

    return view('restful.edit',compact('hocsinh'));
  }
}
