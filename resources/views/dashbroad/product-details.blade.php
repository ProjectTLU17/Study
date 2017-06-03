@extends('template.menubar-employee')
@section('title','Thông tin chi tiết sản phẩm')
@section('main')
  <div class="col-md-12">
    @include('template.notice')
  </div>
  <div class="col-md-12">
    {!!Form::open(array('route'=>array('product.destroy',$product->id),'method'=>'DELETE'))!!}
      <button type="submit" class="btn btn-danger pull-right" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')">Xóa</button>
    {!!Form::close()!!}
      <a type="button" href="{!!route('product.edit',$product->id)!!}" class="btn btn-info pull-right">Sửa</a>
      <a type="button" href="{!!route('CreateContract',$product->id)!!}" class="btn btn-info pull-right">Tạo hợp đồng</a>
  </div>

  <div class="row" style="padding-bottom:20px;">
    <div class="col-md-6 item-photo">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          @for ($i=1; $i < $product->images->count(); $i++)
            <li data-target="#myCarousel" data-slide-to={{$i}}></li>
          @endfor
        </ol>
        <!-- Wrapper for slides -->

        <div class="carousel-inner" style="width:auto;">
            <div class="item active">
              <img style="width:auto;height:500px;" src="/upload/images/{!!$product->images->first()->name or '#'!!}" alt="404" />
            </div>
            @php
              $imgInt=0;
            @endphp
            @foreach ($product->images as $item)
              @if ($imgInt==0)
                @php
                $imgInt++;
                continue;
                @endphp
              @endif
            <div class="item">
              <img style="width:auto;height:500px;" src="/upload/images/{!!$item->name or '#'!!}" alt="404"/>
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-6" style="padding-left:50px;">
      <h5 style="color:#636363;">Tên sản phẩm: </h5>
      <h3 style="margin-top:0px;">{!!$product->name!!}</h3>

      <h5 style="color:#636363;">Nhà cung cấp: </h5>
      <h3 style="margin-top:0px;">{!!$product->suplier->name!!}</h3>

      <h5 style="color:#636363;">Thuộc lô sản phẩm: </h5>
      <h3 style="margin-top:0px;">{!!$product->land->name!!}</h3>

      <h5 style="color:#636363;">Địa chỉ: </h5>
      <h3 style="margin-top:0px;">{!!$product->address!!}</h3>

      <h5 style="color:#636363;">Giá: </h5>
      <h3 style="margin-top:0px;">{!!$product->price!!}$</h3>

      <h5 style="color:#636363;">Trạng thái: </h5>
      <h3 style="margin-top:0px;">{!!$product->status!!}</h3>
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
