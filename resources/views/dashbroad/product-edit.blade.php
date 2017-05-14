@extends('template.menubar-employee')
@section('title','Sửa sản phẩm')
@section('main')

  {!!Form::open(array('route'=>['product.update',$product->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
  {!!Form::token()!!}
  @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
  @endforeach
  <div class="row" style="padding-bottom:20px;">
    <div class="col-md-6 item-photo">
        <img class="img-thumbnail" style="max-width:100%;" src="/upload/images/{!!$product->images->first()->name or '#'!!}" alt="404"/>
    </div>
    <div class="col-md-6" style="padding-left:50px;">
      <h6 class="title-price"><small>Tên sản phẩm: </small></h6>
      <input class="form-control" name="name" value="{!!$product->name!!}">
      <input type="text" name="category_id" value="{!!$product->category->id!!}" hidden>
      <h6 class="title-price"><small>Nhà cung cấp: </small></h6>
      <select class="form-control" name="suplier_id">
        <optgroup label="Chọn dự án" >
          @foreach ($suplier as $isuplier)
            <option value="{{$isuplier->id}}">{{$isuplier->name}}</option>
          @endforeach
        </optgroup>
      </select>

      <h6 class="title-price"><small>Thuộc lô sản phẩm: </small></h6>
      <select class="form-control" name="land_id">
        @foreach ($project as $item_proj)
          <optgroup label="{!!$item_proj->name!!}">
            @foreach ($item_proj->land as $land)
              <option value="{{$land->id}}">{{$land->name}}</option>
            @endforeach
          </optgroup>
        @endforeach
      </select>

      <h6 class="title-price"><small>Địa chỉ: </small></h6>
      <input class="form-control" name="address" value="{!!$product->address!!}">

      <h6 class="title-price"><small>Giá: </small></h6>
      <input class="form-control" name="price" type="numberic" value="{!!$product->price!!}">

      <h6 class="title-price"><small>Trạng thái: </small></h6>
      <select class="form-control" name="status">
        <option value="rent">Rent</option>
        <option value="buy">Buy</option>
        <option value="sold">Sold</option>
      </select>

      <h6 class="title-price"><small>Mô tả: </small></h6>
      <input class="form-control" name="decription" type="text" value="{!!$product->decription!!}">

      <div class="section" style="padding-bottom:20px;">
          <h6><a style="text-decoration:none;" href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Yêu thích</a></h6>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <button class="btn pull-right" type="submit">Cập nhật</button>
      </div>
    </div>
  </div>
    {!!Form::close() !!}
@stop
