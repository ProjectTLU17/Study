<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use View;
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
    return Response()->json(array(
                'error' => false,
                'message' =>'Thêm users thành công',
               ),200);
  }
  public function show($id){
    $users=User::find($id);
    return  Response::json($users);
  }
  public function update($id,Request $Request){
      $users=User::find($id);
      $users->name=$Request->name;
      $users->username=$Request->username;
      $users->password=$Request->password;
      $users->role=$Request->role;
      $users->save();
      return Response()->json(array(
                  'error' => false,
                  'message' =>'Cập nhật users thành công',
                 ),200);
  }
  public function destroy($id){
    $users=User::findorFail($id);
    $users->delete();
    return Response()->json(array(
                'error' => false,
                'message' =>'Xóa users thành công',
               ),200);
  }
  public function edit($id){
    $users=User::find($id);
    return Response::json($users);
  }

}
