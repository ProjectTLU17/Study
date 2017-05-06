@extends('template.menubar-employee')
@section('title','Quản lý sản phẩm bất động sản')
@section('main')
  <!-- Page Content -->
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Biệt thự <a href="#" type="button" class="btn btn-warning pull-right">Thêm mới</a></h1>
        </div>

        @foreach ($product as $item)
          <div class="col-lg-3 col-md-3 col-xs-6 thumb text-center">
            <div class="row">
              <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$item->images!!}" alt="404"></a>
              <a type="button" class="btn btn-info">Xem</a>
              <a type="button" class="btn btn-success">Sửa</a>
              <a type="button" class="btn btn-danger" href="{!!route('product.destroy', $item->id)!!}">Xóa</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
@endsection
