@extends('template.menubar-employee')
@section('title','Quản lý sản phẩm bất động sản')
@section('main')
  <!-- Page Content -->
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Biệt thự</h1>
        </div>

        @foreach ($product as $item)
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="row">
              <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$item->images!!}" alt="404"></a>
            </div>
            <div class="row">
              <a type="button" class="btn btn-info col-md-3 ">Xem</a>
              <a type="button" class="btn btn-success col-md-3">Sửa</a>
              <a type="button" class="btn btn-danger col-md-3" href="{!!route('product.destroy', $item->id)!!}">Xóa</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
@endsection
