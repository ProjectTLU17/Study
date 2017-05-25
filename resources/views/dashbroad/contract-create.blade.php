@extends('template.menubar-employee')
@section('title','Thêm mới hợp đồng')
@section('main')
  {!!Form::open(array('route'=>['contract.store'], 'class'=>'form-horizontal'))!!}
  {!!Form::token()!!}
  <div class="row contract-form">
    <h2 style="text-align:center;">HỢP ĐỒNG KINH DOANH BẤT ĐỘNG SẢN</h2>
  </div>
  <div class="row contract-row">
    <div class="form-group">
      <div class="col-md-4">
        <label class="control-label" for="id">Mã hợp đồng: </label>
        <input class="form-control" name="id">
      </div>
      <div class="col-md-4">
        <label class="control-label" for="type">Loại hợp đồng: </label>
        <input class="form-control" name="type">
      </div>
      <div class="col-md-4">
        <label class="control-label" for="name">Tên hợp đồng: </label>
        <input class="form-control" name="name">
      </div>
    </div>
  </div>
  <div class="row contract-row">
    <div class="form-group">
      <div class="col-md-4">
        <label class="control-label" for="customer">Khách hàng: </label>
        <input class="form-control" name="customer">
      </div>
      <div class="col-md-4">
        <label class="control-label" for="employee">Nhân viên làm hợp đồng: </label>
        <input class="form-control" name="employee">
      </div>
      <div class="col-md-4">
        <label class="control-label" for="product">Sản phẩm: </label>
        <input class="form-control" name="product">
      </div>
    </div>
  </div>
  <div class="row contract-row">
    <div class="form-group">
      <div class="col-md-6">
        <label class="control-label" for="startdate">Ngày bắt đầu: </label>
        <input type="date" class="form-control" name="startdate">
      </div>
      <div class="col-md-6">
        <label class="control-label" for="enddate">Ngày kết thúc: </label>
        <input type="date" class="form-control" name="endate">
      </div>
    </div>
  </div>
  <div class="row contract-row contract-end">
    <div class="form-group">
      <div class="col-md-12">
        <label class="control-label" for="decription">Mô tả thêm về hợp đồng: </label>
        <textarea name="decription" class="form-control" cols="100" rows="5"></textarea>
      </div>
    </div>
  </div>
  <div class="row" style="padding-top:20px;">
    <div class="form-group">
      <div class="col-md-12">
        <button class="btn pull-right" type="submit">Thêm mới</button>
      </div>
    </div>
  </div>
  {!!Form::close() !!}
@stop
