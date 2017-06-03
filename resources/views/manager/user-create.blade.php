@extends('template.menubar-employee')
@section('title','Tạo tài khoản')
@section('main')
  {!!Form::open(array('route'=>['user.store'], 'class'=>'form-horizontal'))!!}
  {!!Form::token()!!}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Họ và tên: </label>
        <div class="col-sm-10">
          <input class="form-control" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Tên đăng nhập: </label>
        <div class="col-sm-10">
          <input class="form-control" name="username" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Mật khẩu: </label>
        <div class="col-sm-10">
          <input class="form-control" type="password" name="password" >
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
          <input class="form-control" type="date" name="birthday"  >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="address">Address: </label>
        <div class="col-sm-10">
          <input class="form-control" name="address"  >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="phone">Telephone: </label>
        <div class="col-sm-10">
          <input class="form-control" name="phone" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email: </label>
        <div class="col-sm-10">
          <input class="form-control" name="email" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <a type="button" class="btn btn-warning pull-right" href="{{ URL::previous() }}">Hủy bỏ</a>
          <button class="btn btn-info pull-right" type="submit">Thêm mới</button>
        </div>
      </div>
  {!!Form::close() !!}
@stop
