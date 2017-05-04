<?php

namespace App\Http\Controllers;


use App\User;
use Response;
use View;
use App\Http\UserRequest;
class UserRAController extends Controller
{
    public function index(){
      $user=User::all();
      //return Response::json(array('body' => View::make('manager.user-index',array('user'=>$user))->render()));
      //return Response::json($user);
      return response::json([
          'body' => view::make('manager.user-index', compact('user'))->render(),
          'user' => $user,
      ]);
    }
    public function store(UserRequest $Request){
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
    return Response::json(array(
                'error' => false,
                'message' =>'Thêm user thành công',
               ),200);
  }
  public function show($id){
    $user=User::find($id);
    //return  Response::json($user);
    return response::json([
      'body' => view::make('manager.user-details', compact('user'))->render(),
      'user' => $user,
    ]);
  }
  public function update($id,UserRequest $Request){
      $user=User::find($id);
      $user->name=$Request->name;
      $user->username=$Request->username;
      $user->password=$Request->password;
      $user->role=$Request->role;
      $user->birthday=$Request->birthday;
      $user->address=$Request->address;
      $user->phone=$Request->phone;
      $user->email=$Request->email;
      $user->save();
      return Response::json(array(
                  'error' => false,
                  'message' =>'Cập nhật user thành công',
                 ),200);
  }
  public function create(){
    return response::json([
      'body' => view::make('manager.user-create', compact('user'))->render(),
    ]);
  }
  public function destroy($id){
    $user=User::findorFail($id);
    $user->delete();
    return Response::json(array(
                'error' => false,
                'message' =>'Xóa user thành công',
               ),200);
  }
  public function edit($id){
    $user=User::findorFail($id);
    return response::json([
      'body' => view::make('manager.user-edit', compact('user'))->render(),
      'user' => $user,
    ]);
  }
}
