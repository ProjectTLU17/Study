@extends('template.menubar-employee')
@section('title','Quản lý sản phẩm bất động sản')
@section('main')
  <!-- Page Content -->

        <div class="col-lg-12">
            <a href="{!!route('product.create')!!}" type="button" class="btn btn-warning pull-right">Thêm mới</a>
        </div>
        @foreach ($category as $item_cate)
          <div class="row">
            @if (count($item_cate->product)>0)
              <h1 class="page-header">{!!$item_cate->name!!}</h1>
              @foreach ($item_cate->product as $prodt)
                <div class="col-lg-3 col-md-3 col-xs-6 thumb text-center">
                  <div class="row">
                    <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$prodt->images->first()->name or '#'!!}" alt="404"></a>
                    <h3>{!!$prodt->name!!}</h3>
                    <a type="button" class="btn btn-info pull-left" href="{!!route('product.show',$prodt->id)!!}">Xem</a>
                    <a type="button" class="btn btn-success">Sửa</a>
                    {!!Form::open(array('route'=>array('product.destroy',$prodt->id),'method'=>'DELETE'))!!}
                      <button type="submit" class="btn btn-danger" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')">Xóa</button>
                    {!!Form::close()!!}
                  </div>
                </div>
              @endforeach
            @endif
            </div>
          @endforeach

@stop
