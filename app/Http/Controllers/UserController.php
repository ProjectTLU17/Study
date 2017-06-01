<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
class UserController extends Controller
{
    public function index(){
      $user=User::all();
      return view('manager.user-index',compact('user'));
    }
    public function store(UserRequest $Request){
    $user=new User;
    $user->name=$Request->name;
    $user->username=$Request->username;
    $user->password=Hash::make($Request->password);
    $user->role=$Request->role;
    $user->birthday=$Request->birthday;
    $user->phone=$Request->phone;
    $user->email=$Request->email;
    $user->save();
    session()->flash('alert-success', 'Thêm mới thành công!');
    return redirect()->route('user.index');
  }
  public function create(){
    return view('manager.user-create');
  }
  public function show($id){
    $user=User::find($id);
    return view('manager.user-details',compact('user'));
  }
  public function update(UserRequest $Request,$id){
      $user=User::find($id);
      $user->name=$Request->name;
      $user->password=Hash::make($Request->password);
      $user->role=$Request->role;
      $user->birthday=$Request->birthday;
      $user->phone=$Request->phone;
      $user->email=$Request->email;
      $user->save();
      session()->flash('alert-success', 'Cập nhật thành công!');
    return redirect()->route('user.edit',$id);
  }
  public function destroy($id){
    User::destroy($id);
    session()->flash('alert-danger', 'Xóa thành công!');
    return redirect()->route('user.index');
  }
  public function edit($id){
    $user=User::find($id);
    return view('manager.user-edit',compact('user'));
  }
}
