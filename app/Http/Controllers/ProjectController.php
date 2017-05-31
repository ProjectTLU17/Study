<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Project;
class ProjectController extends Controller
{
  public function index(){
      $project=Project::all();
    return view('dashbroad.project-index',compact('project'));
  }
  public function store(ProjectRequest $Request){
      Project::create($Request->all());
      session()->flash('alert-success', 'Thêm mới thành công!');
    return redirect()->route('project.index');
  }
  public function create(){
    return view('dashbroad.project-create');
  }
  public function show($id){
      $project=Project::find($id);
    return view('dashbroad.project-details',compact('project'));
  }
  public function update($id,ProjectRequest $Request){
      Project::updateOrCreate(['id' => $id],$Request->all());
      session()->flash('alert-success', 'Cập nhật thành công!');
    return redirect()->route('project.edit',$id);
  }
  public function destroy($id){
      Project::destroy($id);
      session()->flash('alert-danger', 'Xóa thành công!');
    return redirect()->route('project.index');
  }
  public function edit($id){
      $project=Project::find($id);
    return view('dashbroad.project-edit',compact('project'));
  }
}
