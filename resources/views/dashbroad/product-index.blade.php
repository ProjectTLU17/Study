@extends('template.menubar-employee')
@section('title','Quản lý sản phẩm bất động sản')
@section('main')
  <!-- Page Content -->

      <div class="col-lg-12">
          <a href="{!!route('product.create')!!}" type="button" class="btn btn-warning pull-right">Thêm mới</a>
      </div>

        @foreach ($category as $item_cate)
          <div class="row">
            @if (!$item_cate->product->isEmpty())
              <h1 class="page-header">{!!$item_cate->name!!}</h1>
              @foreach ($item_cate->product as $prodt)
                <div class="col-lg-3 col-md-3 col-xs-6 thumb text-center">
                  <div class="row">
                    <a href="{!!route('product.show',$prodt->id)!!}"><img class="thumbnails" src="/upload/images/{!!$prodt->images->first()->name or '#'!!}" alt="404"></a>
                    <a style="text-decoration:none;" href="{!!route('product.show',$prodt->id)!!}"><h4>{!!$prodt->name!!}</h4></a>
                    <h5>{!!$prodt->price!!}$</h5><h5>-------{!!$prodt->status!!}-------</h5>
                  </div>
                </div>
              @endforeach
            @endif
            </div>
          @endforeach
@stop
