@extends('template.menubar-employee')
@section('title','Thông tin nhà cung cấp')
@section('main')

  <ul class="nav nav-tabs">
    <li ><a  href="{!!route('suplier.index')!!}">Danh sách nhà cung cấp</a></li>
    <li class="active"><a href="#suplier-edit">Thông tin nhà cung cấp</a></li>
  </ul>
  <div class="tab-content" style="padding-top:50px;">
    <div>
      {!!Form::open(array('route'=>['suplier.update',$suplier->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
      {!!Form::token()!!}
        <div class="form-group">
          @include('template.notice')
          <label class="control-label col-md-3" for="name">Họ và tên: </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="{!!$suplier->name!!}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3" for="phone">Telephone: </label>
          <div class="col-md-9">
            <input class="form-control" name="phone" value="{!!$suplier->phone!!}" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3" for="address">Address: </label>
          <div class="col-md-9">
            <input class="form-control" name="address" value="{!!$suplier->address!!}" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3" for="email">Email: </label>
          <div class="col-md-9">
            <input class="form-control" name="email" value="{!!$suplier->email!!}" >
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <a type="button" class="btn btn-warning pull-right" href="{{ URL::previous() }}">Hủy bỏ</a>
            <button class="btn btn-info pull-right" type="submit">Cập Nhật</button>
          </div>
        </div>
      {!!Form::close() !!}
    </div>
  </div>
@stop
