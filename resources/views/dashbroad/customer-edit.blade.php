@extends('template.menubar-employee')
@section('title','Thông tin khách hàng')
@section('main')

  <ul class="nav nav-tabs">
    <li ><a  href="{!!route('customer.index')!!}">Danh sách khách hàng</a></li>
    <li class="active"><a href="#customer-edit">Thông tin khách hàng</a></li>
  </ul>
  <div class="tab-content" style="padding-top:50px;">
    <div>
      {!!Form::open(array('route'=>['customer.update',$customer->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
      {!!Form::token()!!}
          <div class="form-group">
            <div class="alert text-center">
              @foreach ($errors->all() as $error)
                <p style="color:red">{!!$error!!}</p>
              @endforeach
            </div>
            <label class="control-label col-md-3" for="name">Họ và tên: </label>
            <div class="col-md-9">
              <input class="form-control" name="name" value="{!!$customer->name!!}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="phone">Telephone: </label>
            <div class="col-md-9">
              <input class="form-control" name="phone" value="{!!$customer->phone!!}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Email: </label>
            <div class="col-md-9">
              <input class="form-control" name="email" value="{!!$customer->email!!}">
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                <button class="btn pull-right" type="submit">Cập Nhật</button>
              </div>
          </div>
      {!!Form::close() !!}
    </div>
  </div>
@stop
