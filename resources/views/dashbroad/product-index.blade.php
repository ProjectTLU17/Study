@extends('template.menubar-employee')
@section('title','Quản lý sản phẩm bất động sản')
@section('main')
  <!-- Page Content -->
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Biệt thự</h1>
        </div>

        @foreach ($product as $item)
          <div class="col-lg-3 col-md-4 col-xs-6 thumb text-center">
            <div class="row">
              <a class="thumbnail"><img src="/upload/images/{!!$item->images!!}" alt="404"></a>
              <a type="button" class="btn btn-info">Xem</a>
              <a type="button" class="btn btn-success center">Sửa</a>
              <a type="button" class="btn btn-danger" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" href="{!!route('product.destroy', $item->id)!!}">Xóa</a>
            </div>
          </div>
          @endforeach
        </div>
@stop
