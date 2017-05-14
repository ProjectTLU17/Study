@extends('template.menubar-employee')
@section('title','Thông tin chi tiết sản phẩm')
@section('main')
  <div class="col-md-12">
    {!!Form::open(array('route'=>array('product.destroy',$product->id),'method'=>'DELETE'))!!}
      <button type="submit" class="btn btn-danger pull-right" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')">Xóa</button>
    {!!Form::close()!!}
  </div>

  <div class="row" style="padding-bottom:20px;">
    <div class="col-md-6 item-photo">
        <img style="max-width:100%;" src="/upload/images/{!!$product->images->first()->name or '#'!!}" alt="404"/>
    </div>
    <div class="col-md-6" style="padding-left:50px;">
      <h6 class="title-price"><small>Tên sản phẩm: </small></h6>
      <h3 style="margin-top:0px;">{!!$product->name!!}</h3>

      <h6 class="title-price"><small>Nhà cung cấp: </small></h6>
      <h3 style="margin-top:0px;">{!!$product->suplier->name!!}</h3>

      <h6 class="title-price"><small>Thuộc lô sản phẩm: </small></h6>
      <h3 style="margin-top:0px;">{!!$product->land->name!!}</h3>

<!--    <h6 class="title-price"><small>Thuộc dự án: </small></h6>
      <h3 style="margin-top:0px;"></h3>-->

      <h6 class="title-price"><small>Địa chỉ: </small></h6>
      <h3 style="margin-top:0px;">{!!$product->address!!}</h3>

      <h6 class="title-price"><small>Giá: </small></h6>
      <h3 style="margin-top:0px;">{!!$product->price!!}$</h3>

      <h6 class="title-price"><small>Trạng thái: </small></h6>
      <h3 style="margin-top:0px;">{!!$product->status!!}</h3>

      <div class="section" style="padding-bottom:20px;">
          <h6><a style="text-decoration:none;" href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Yêu thích</a></h6>
      </div>
    </div>
  </div>
  <div class="row" style="padding:10px;">
    <div class="col-md-12">
      <div style="width:100%;border-top:1px solid silver">
        <h3 style="padding:15px;">Mô tả: </h3>
        <p style="padding:15px;">{!!$product->decription!!}</p>
      </div>
    </div>
  </div>
@stop
