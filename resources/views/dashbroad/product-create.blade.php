@extends('template.menubar-employee')
@section('title','Thêm mới sản phẩm')
@section('main')
  {!!Form::open(array('route'=>['product.store'], 'class'=>'form-horizontal','enctype'=>'multipart/form-data'))!!}
  {!!Form::token()!!}
    <div class="form-group">
      <label class="control-label col-md-2" for="typecategory">Loại sản phẩm: </label>
      <div class="col-md-2">
        <select class="form-control" name="category_id">
          <optgroup label="Loại sản phẩm" >
            @foreach ($category as $item_cate)
              <option value="{{$item_cate->id}}">{{$item_cate->name}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>
      <label class="control-label col-md-2">Nhà cung cấp:</label>
      <div class="col-md-2">
        <select class="form-control" name="suplier_id">
          <optgroup label="Chọn dự án" >
            @foreach ($suplier as $isuplier)
              <option value="{{$isuplier->id}}">{{$isuplier->name}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>
      <label class="control-label col-md-2">Lô:</label>
      <div class="col-md-2">
        <select class="form-control" name="land_id">
          @foreach ($project as $item_proj)
            <optgroup label="{!!$item_proj->name!!}">
              @foreach ($item_proj->land as $land)
                <option value="{{$land->id}}">{{$land->name}}</option>
              @endforeach
            </optgroup>
          @endforeach
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
      <label class="control-label col-md-3" for="decription">Mô tả: </label>
      <div class="col-md-9">
        <input class="form-control" name="decription">
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
        <select class="form-control" name="status">
          <option value="rent">Rent</option>
          <option value="buy">Buy</option>
          <option value="sold">Sold</option>
        </select>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3" for="price">Ảnh Sản phẩm: </label>
        <div class="col-md-9">
          <input  type="file" name="fimages[]" multiple/>
        </div>
    </div>

      <div class="form-group">
        <div class="col-sm-12">
          <button class="btn pull-right" type="submit">Thêm mới</button>
        </div>
      </div>
  {!!Form::close() !!}
@stop
