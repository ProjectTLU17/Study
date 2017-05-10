@extends('template.menubar-employee')
@section('title','Sửa thông tin thành viên')
@section('main')
  {!!Form::open(array('route'=>['user.update',$user->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
  {!!Form::token()!!}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Họ và tên: </label>
        <div class="col-sm-10">
          <input class="form-control" name="name" value="{!!$user->name!!}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Tên đăng nhập: </label>
        <div class="col-sm-10">
          <input class="form-control" name="username" value="{!!$user->username!!}" disabled>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Mật khẩu: </label>
        <div class="col-sm-10">
          <input class="form-control" type="password" name="password" value="{!!$user->password!!}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="role">Job Role: </label>
        <div class="col-sm-10">
          <label class="radio-inline"><input type="radio" name="role" value="manager">Manager</label>
          <label class="radio-inline"><input type="radio" name="role" value="employee" checked>Employee</label>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="birthday">Birthday: </label>
        <div class="col-sm-10">
          <input class="form-control" type="date" name="birthday" value="{!!$user->birthday!!}" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="address">Address: </label>
        <div class="col-sm-10">
          <input class="form-control" name="address" value="{!!$user->address!!}" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="phone">Telephone: </label>
        <div class="col-sm-10">
          <input class="form-control" name="phone" value="{!!$user->phone!!}" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email: </label>
        <div class="col-sm-10">
          <input class="form-control" name="email" value="{!!$user->email!!}" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <button class="btn pull-right" type="submit">Cập nhật</button>
        </div>
      </div>
  {!!Form::close() !!}
@stop
