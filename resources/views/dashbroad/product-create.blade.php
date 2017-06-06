@extends('template.menubar-employee')
@section('title','Thêm mới sản phẩm')
@section('main')
  {!!Form::open(array('route'=>['product.store'], 'class'=>'form-horizontal','enctype'=>'multipart/form-data'))!!}
  {!!Form::token()!!}
    <div class="form-group">
      <div class="col-md-12">
        @include('template.notice')
      </div>

      <div class="col-md-4">
        <label class="control-label" for="typecategory">Loại sản phẩm: </label>
        <select class="form-control" name="category_id">
          <optgroup label="Loại sản phẩm" >
            @foreach ($category as $item_cate)
              <option value="{{$item_cate->id}}">{{$item_cate->name}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>

      <div class="col-md-4">
        <label class="control-label">Nhà cung cấp:</label>
        <select class="form-control" name="suplier_id">
          <optgroup label="Chọn dự án" >
            @foreach ($suplier as $isuplier)
              <option value="{{$isuplier->id}}">{{$isuplier->name}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>

      <div class="col-md-4">
        <label class="control-label">Lô:</label>
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
      <label class="control-label col-md-2" for="name">Tên sản phẩm: </label>
      <div class="col-md-10">
        <input class="form-control" name="name" placeholder="Nhập vào tên sản phẩm ...">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-2" for="address">Địa chỉ: </label>
      <div class="col-md-10">
        <input class="form-control" name="address" placeholder="Nhập vào địa chỉ của sản phẩm ...">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-2" for="decription">Mô tả: </label>
      <div class="col-md-10">
        <textarea class="form-control" name="decription" rows="5" cols="0" placeholder="Mô tả một chút về sản phẩm ..."></textarea>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4">
        <label class="control-label" for="price">Giá: </label>
        <input class="form-control int" type="text" name="price" placeholder="0 $">
      </div>

      <div class="col-md-4">
        <label class="control-label" for="status">Trạng thái sản phẩm:</label>
        <select class="form-control" name="status">
          <optgroup label="Trạng thái sản phẩm">
            <option value="rent">Thuê</option>
            <option value="buy">Mua</option>
            <option value="sold">Bán</option>
          </optgroup>
        </select>
      </div>
      <div class="col-md-4">
        <label class="control-label" for="price">Ảnh Sản phẩm: </label>
        <input class="btn" type="file" name="fimages[]" multiple>
      </div>
    </div>

    <div class="form-group">

        <div class="col-md-9">

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
