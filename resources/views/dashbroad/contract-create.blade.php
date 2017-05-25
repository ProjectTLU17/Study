@extends('template.menubar-employee')
@section('title','Thêm mới hợp đồng')
@section('main')

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#contract-buy">Hợp đồng mua bất động sản</a></li>
    <li><a data-toggle="tab" href="#contract-rent">Hợp đồng thuê bất động sản</a></li>
    <li><a data-toggle="tab" href="#contract-sell">Hợp đồng bán bất động sản</a></li>
  </ul>

  <div class="tab-content" style="padding-top:50px;">
    <div id="contract-buy" class="tab-pane fade in active">
      {!!Form::open(array('route'=>['contract.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
      <div class="row contract-form">
        <h2 style="text-align:center;">HỢP ĐỒNG MUA BẤT ĐỘNG SẢN</h2>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="id">Mã hợp đồng: </label>
            <input class="form-control" name="id" disabled>
          </div>
          <div class="col-md-4">
            <label class="control-label" for="name">Tên hợp đồng: </label>
            <input class="form-control" name="name">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="suplier">Nhà cung cấp: </label>
            <input class="form-control" name="suplier">
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-3">
            <label class="control-label" for="customer">Khách hàng: </label>
            <input class="form-control" name="customer">
          </div>
          <div class="col-md-3">
            <label class="control-label" for="employee">Nhân viên làm hợp đồng: </label>
            <input class="form-control" name="employee">
          </div>
          <div class="col-md-3">
            <label class="control-label" for="product">Sản phẩm: </label>
            <input class="form-control" name="product">
          </div>
          <div class="col-md-3">
            <label class="control-label" for="price">Giá sản phẩm: </label>
            <input class="form-control" name="price">
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
    </div>

    <div id="contract-rent" class="tab-pane fade in">
      {!!Form::open(array('route'=>['contract.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
      <div class="row contract-form">
        <h2 style="text-align:center;">HỢP ĐỒNG THUÊ BẤT ĐỘNG SẢN</h2>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="id">Mã hợp đồng: </label>
            <input class="form-control" name="id" disabled>
          </div>
          <div class="col-md-4">
            <label class="control-label" for="name">Tên hợp đồng: </label>
            <input class="form-control" name="name">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="suplier">Nhà cung cấp: </label>
            <input class="form-control" name="suplier">
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="customer">Khách hàng người thuê: </label>
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
          <div class="col-md-4">
            <label class="control-label" for="startdate">Ngày bắt đầu: </label>
            <input type="date" class="form-control" name="startdate">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="enddate">Ngày kết thúc: </label>
            <input type="date" class="form-control" name="endate">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="price">Giá thuê hàng tháng: </label>
            <input type="numberic" class="form-control" name="price" placeholder="" disabled>
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
    </div>

    <div id="contract-sell" class="tab-pane fade in active">
      {!!Form::open(array('route'=>['contract.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
      <div class="row contract-form">
        <h2 style="text-align:center;">HỢP ĐỒNG BÁN BẤT ĐỘNG SẢN</h2>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="id">Mã hợp đồng: </label>
            <input class="form-control" name="id" disabled>
          </div>
          <div class="col-md-4">
            <label class="control-label" for="name">Tên hợp đồng: </label>
            <input class="form-control" name="name">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="type">Tên sản phẩm: </label>
            <input class="form-control" name="type">
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="customer">Khách hàng người bán: </label>
            <input class="form-control" name="customer">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="employee">Nhân viên làm hợp đồng: </label>
            <input class="form-control" name="employee">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="price">Định giá sản phẩm: </label>
            <input class="form-control" name="price">
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="startdate">Ngày bán: </label>
            <input type="date" class="form-control" name="startdate">
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
    </div>
  </div>
@stop
