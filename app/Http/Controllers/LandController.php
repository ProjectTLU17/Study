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
      $land->save();
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
      return redirect()->route('land.index');
  }
  public function destroy($id){
      Land::destroy($id);
    return redirect()->route('land.index');
  }
  public function edit($id){
      $project=Project::all();
      $land=Land::with('project')->where('id', $id)->first();
    return view('dashbroad.land-edit',compact(['land','project']));
  }
}
