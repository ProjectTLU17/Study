<?php

namespace App\Http\Controllers;
<<<<<<< HEAD


use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
>>>>>>> refs/remotes/origin/Back-End
use App\User;
class UserController extends Controller
{
    public function index(){
      $user=User::all();
      return view('manager.user-index',compact('user'));
    }
    public function store(Request $Request){
    $user=new User;
    $user->name=$Request->name;
    $user->username=$Request->username;
    $user->password=$Request->password;
    $user->role=$Request->role;
    $user->birthday=$Request->birthday;
    $user->address=$Request->address;
    $user->phone=$Request->phone;
    $user->email=$Request->email;
    $user->save();
    return redirect()->route('user.index');
  }
  public function create(){
    return view('manager.user-create');
  }
  public function show($id){
    $user=User::find($id);
    return view('manager.user-details',compact('user'));
  }
<<<<<<< HEAD
  public function update(Request $Request,$id){
=======
  public function update(UserRequest $Request,$id){
>>>>>>> refs/remotes/origin/Back-End
      $user=User::find($id);
      $user->name=$Request->name;
      $user->password=$Request->password;
      $user->role=$Request->role;
      $user->birthday=$Request->birthday;
      $user->address=$Request->address;
      $user->phone=$Request->phone;
      $user->email=$Request->email;
      $user->save();
      return redirect()->route('user.index');
  }
  public function destroy($id){
    $user=User::findorFail($id);
    $user->delete();
    return redirect()->route('user.index');
  }
  public function edit($id){
    $user=User::find($id);
    return view('manager.user-edit',compact('user'));
  }

}
