@extends('template.menubar-employee')
@section('title','Quản lý sản phẩm bất động sản')
@section('main')
  <!-- Page Content -->
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Biệt thự</h1>
        </div>
        <div class="row">
        @foreach ($product as $item)
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$item->images!!}" alt="404"></a>
              <a type="button" class="btn btn-danger pull-right" href="{!!route('product.destroy', $item->id)!!}">Xóa</a>
              <a type="button" class="btn btn-info pull-left">Xem</a>
              <a type="button" class="btn btn-success pull-center">Sửa</a>
          </div>
          @endforeach
        </div>
      </div>
@endsection
