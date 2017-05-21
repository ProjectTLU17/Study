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
      Suplier::create($Request->all());
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
          Suplier::updateOrCreate(['id'=>$id],$Request->all());
        return redirect()->route('suplier.index');
    }
    public function destroy($id){
        Suplier::destroy($id);
      return redirect()->route('suplier.index');
    }
    public function edit($id){
        $suplier=Suplier::with('product')->where('id',$id)->first();
      return view('dashbroad.suplier-edit',compact('suplier'));
    }
}
