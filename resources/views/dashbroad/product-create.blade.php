@extends('template.menubar-employee')
@section('title','Thêm mới sản phẩm')
@section('main')
  {!!Form::open(array('route'=>['product.store'], 'class'=>'form-horizontal'))!!}
  {!!Form::token()!!}

    <div class="form-group">
      <label class="control-label col-md-3" for="typecategory">Loại sản phẩm: </label>
      <div class="col-md-9">
        <select class="form-control">
          <optgroup label="Loại sản phẩm">
            <option value="">Lô đất</option>
            <option value="">Biệt thự</option>
            <option value="">Nhà liền kề</option>
            <option value="">Căn hộ</option>
          </optgroup>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3" for="name">Tên sản phẩm: </label>
      <div class="col-md-9">
        <input class="form-control" name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3" for="address">Địa chỉ: </label>
      <div class="col-md-9">
        <input class="form-control" name="address" >
      </div>
    </div>

      <div class="form-group">
        <label class="control-label col-md-3" for="description">Mô tả: </label>
        <div class="col-md-9">
          <input class="form-control" name="description">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3" for="price">Giá: </label>
        <div class="col-sm-9">
          <input class="form-control" type="date" name="price">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3" for="status">Trạng thái: </label>
        <div class="col-md-9">
          <select class="form-control">
            <option value="">Rent</option>
            <option value="">Buy</option>
            <option value="">Sold</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <button class="btn pull-right" type="submit">Thêm mới</button>
        </div>
      </div>
  {!!Form::close() !!}
@stop
