@extends('template.menubar-employee')
@section('title','Thêm mới sản phẩm')
@section('main')
  {!!Form::open(array('route'=>['product.store'], 'class'=>'form-horizontal','enctype'=>'multipart/form-data'))!!}
  {!!Form::token()!!}
    <div class="form-group">
      <label class="control-label col-md-3" for="typecategory">Loại sản phẩm: </label>
      <div class="col-md-9">
        <select class="form-control">
          <optgroup label="Loại sản phẩm" name="category_id">
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
      <div class="col-md-2"></div>
      <label class="control-label col-md-1" for="price">Giá: </label>
      <div class="col-sm-4">
        <input class="form-control" type="numberic" name="price">
      </div>
      <label class="control-label col-md-1" for="status">Status:</label>
      <div class="col-md-4">
        <select class="form-control">
          <option value="">Rent</option>
          <option value="">Buy</option>
          <option value="">Sold</option>
        </select>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3" for="price">Thêm ảnh: </label>
        <div class="col-sm-3">
          <input class="btn btn-block" type="file" name="fimages[]" multiple/>
        </div>
    </div>

      <div class="form-group">
        <div class="col-sm-12">
          <button class="btn pull-right" type="submit">Thêm mới</button>
        </div>
      </div>
  {!!Form::close() !!}
@stop
