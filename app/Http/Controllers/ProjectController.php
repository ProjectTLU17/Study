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
  $project=new Project;
  $project->name=$Request->name;
  $project->phone=$Request->phone;
  $project->email=$Request->email;
  $project->save();
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
    $project=Project::find($id);
    $project->name=$Request->name;
    $project->phone=$Request->phone;
    $project->email=$Request->email;
    $project->save();
    return redirect()->route('project.index');
}
public function destroy($id){
  $project=Project::findorFail($id);
  $project->delete();
  return redirect()->route('project.index');
}
public function edit($id){
  $project=Project::find($id);
  return view('dashbroad.project-edit',compact('project'));
}
}
