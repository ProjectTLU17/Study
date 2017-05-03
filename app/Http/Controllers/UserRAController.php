<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use View;
class UserRAController extends Controller
{
    public function index(){
      $user=User::all();
      return Response::json(array('body' => View::make('manager.user-index',array('user'=>$user))->render()));
    }
    public function store(Request $Request){
    $user=new User;
    $user->name=$Request->name;
    $user->username=$Request->username;
    $user->password=$Request->password;
    $user->role=$Request->role;
    $user->save();
    return Response()->json(array(
                'error' => false,
                'message' =>'Thêm user thành công',
               ),200);
  }
  public function show($id){
    $user=User::find($id);
    return  Response::json($user);
  }
  public function update($id,Request $Request){
      $user=User::find($id);
      $user->name=$Request->name;
      $user->username=$Request->username;
      $user->password=$Request->password;
      $user->role=$Request->role;
      $user->save();
      return Response()->json(array(
                  'error' => false,
                  'message' =>'Cập nhật user thành công',
                 ),200);
  }
  public function destroy($id){
    $user=User::findorFail($id);
    $user->delete();
    return Response()->json(array(
                'error' => false,
                'message' =>'Xóa user thành công',
               ),200);
  }
  public function edit($id){
    $user=User::find($id);
    return Response::json($user);
  }

}
