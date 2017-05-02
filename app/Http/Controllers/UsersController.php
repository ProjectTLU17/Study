<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function index(){
      $users=User::all();
      return view('manager.users-index',compact('users'));
    }
    public function store(Request $Request){
    $users=new User;
    $users->name=$Request->name;
    $users->username=$Request->username;
    $users->password=$Request->password;
    $users->role=$Request->role;
    $users->save();
    return redirect()->route('users.index');
  }
  public function create(){
    return view('manager.users-create');
  }
  public function show($id){
    $user=User::find($id);
    return view('manager.user-details',compact('user'));
  }
  public function update($id,Request $Request){
      $users=User::find($id);
      $users->name=$Request->name;
      $users->username=$Request->username;
      $users->password=$Request->password;
      $users->role=$Request->role;
      $users->save();
      return redirect()->route('users.index');
  }
  public function destroy($id){
    $users=User::findorFail($id);
    $users->delete();
    return redirect()->route('users.index');
  }
  public function edit($id){
    $users=User::find($id);
    return view('manager.users-edit',compact('users'));
  }

}
