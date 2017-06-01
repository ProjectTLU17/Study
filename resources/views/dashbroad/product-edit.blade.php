@extends('template.menubar-employee')
@section('title','Sửa sản phẩm')
@section('main')

  {!!Form::open(array('route'=>['product.update',$product->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
  {!!Form::token()!!}
  @include('template.notice')
  <div class="row" style="padding-bottom:20px;">
    <div class="col-md-6 item-photo">
        <img class="img-thumbnail" style="width:auto;height:500px;" src="/upload/images/{!!$product->images->first()->name or '#'!!}" alt="404"/>
    </div>
    <div class="col-md-6" style="padding-left:50px;">
      <h6 class="title-price"><small>Tên sản phẩm: </small></h6>
      <input class="form-control" name="name" value="{!!$product->name!!}">
      <input type="text" name="category_id" value="{!!$product->category->id!!}" hidden>
      <h6 class="title-price"><small>Nhà cung cấp: </small></h6>
      <select class="form-control" name="suplier_id">
        <optgroup label="Chọn dự án" >
          @foreach ($suplier as $isuplier)
            @if ($isuplier->id==$product->suplier_id)
              <option value="{{$isuplier->id}}" selected>{{$product->suplier->name}}</option>
            @else
              <option value="{{$isuplier->id}}">{{$isuplier->name}}</option>
            @endif
          @endforeach
        </optgroup>
      </select>

      <h6 class="title-price"><small>Thuộc lô sản phẩm: </small></h6>
      <select class="form-control" name="land_id">
        @foreach ($project as $item_proj)
          <optgroup label="{!!$item_proj->name!!}">
            @foreach ($item_proj->land as $land)
              @if ($land->id==$product->land_id)
                <option value="{{$land->id}}"selected>{{$product->land->name}}</option>
              @else
                <option value="{{$land->id}}">{{$land->name}}</option>
              @endif
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
        @if ($product->status==='Đang cho thuê')
          <option value="Đang cho thuê" selected >Đang cho thuê</option>
          <option value="Chưa bán" >Chưa bán</option>
          <option value="Đã bán" >Đã bán</option>
          @elseif ($product->status==='Chưa bán')
            <option value="Đang cho thuê"  >Đang cho thuê</option>
            <option value="Chưa bán" selected>Chưa bán</option>
            <option value="Đã bán" >Đã bán</option>
            @else
              <option value="Đang cho thuê"  >Đang cho thuê</option>
              <option value="Chưa bán" >Chưa bán</option>
              <option value="Đã bán" selected>Đã bán</option>
        @endif
      </select>

      <h6 class="title-price"><small>Mô tả: </small></h6>
      <input class="form-control" name="decription" type="text" value="{!!$product->decription!!}">


    </div>
    <div class="form-group">
      <div class="col-sm-12">

        <a type="button" class="btn btn-warning pull-right" href="{{ URL::previous() }}">Hủy bỏ</a>
        <button class="btn btn-info pull-right" type="submit">Cập Nhật</button>
      </div>
    </div>
  </div>
    {!!Form::close() !!}
@stop
