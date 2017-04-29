<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
class UsersRAController extends Controller
{
    public function index(){
      $users=User::all();
      return Response::json($users);
    }
    public function store(Request $Request){
    $users=new User;
    $users->name=$Request->name;
    $users->username=$Request->username;
    $users->password=$Request->password;
    $users->role=$Request->role;
    $users->save();
    return redirect()->route('restfulAPI.users-index');
  }
  public function create(){
    return view('restfulAPI.users-create');
  }
  public function show($id){
    echo "đây là dòng dữ liệu thứ $id";
  }
  public function update($id,Request $Request){
      $users=User::find($id);
      $users->name=$Request->name;
      $users->username=$Request->username;
      $users->password=$Request->password;
      $users->role=$Request->role;
      $users->save();
      return redirect()->route('restfulAPI.users-index');
  }
  public function destroy($id){
    $users=User::findorFail($id);
    $users->delete();
    return redirect()->route('restfulAPI.users-index');
  }
  public function edit($id){
    $users=User::find($id);
    return view('restfulAPI.users-edit',compact('users'));
  }

}
