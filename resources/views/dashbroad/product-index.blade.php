@extends('template.menubar-employee')
@section('title','Quản lý sản phẩm bất động sản')
@section('main')
  <!-- Page Content -->
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Biệt thự <a href="{!!route('product.create')!!}" type="button" class="btn btn-warning pull-right">Thêm mới</a></h1>
        </div>
        @foreach ($product as $item)
          <div class="col-lg-3 col-md-3 col-xs-6 thumb text-center">
            <div class="row">
              <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$item->images->first()->name!!}" alt="404"></a>
              <h3>{!!$item->name!!}</h3>
              <a type="button" class="btn btn-info pull-left" href="{!!route('product.show',$item->id)!!}">Xem</a>
              <a type="button" class="btn btn-success">Sửa</a>
              {!!Form::open(array('route'=>array('product.destroy',$item->id),'method'=>'DELETE'))!!}
                <button type="submit" class="btn btn-danger" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')">Xóa</button>
              {!!Form::close()!!}
            </div>
          </div>
          @endforeach
        </div>



        <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Căn hộ<a href="#" type="button" class="btn btn-warning pull-right">Thêm mới</a></h1>
          </div>

          @foreach ($product as $item)
            <div class="col-lg-3 col-md-3 col-xs-6 thumb text-center">
              <div class="row">
                <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$item->images!!}" alt="404"></a>
                <a type="button" class="btn btn-info">Xem</a>
                <a type="button" class="btn btn-success">Sửa</a>
                {!!Form::open(array('route'=>array('product.destroy',$item->id),'method'=>'DELETE'))!!}
                  <button type="submit" class="btn btn-danger" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')">Xóa</button>
                {!!Form::close()!!}
              </div>
            </div>
            @endforeach
          </div>



          <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhà liền kề <a href="#" type="button" class="btn btn-warning pull-right">Thêm mới</a></h1>
            </div>

            @foreach ($product as $item)
              <div class="col-lg-3 col-md-3 col-xs-6 thumb text-center">
                <div class="row">
                  <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$item->images!!}" alt="404"></a>
                  <a type="button" class="btn btn-info">Xem</a>
                  <a type="button" class="btn btn-success">Sửa</a>
                  {!!Form::open(array('route'=>array('product.destroy',$item->id),'method'=>'DELETE'))!!}
                    <button type="submit" class="btn btn-danger" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')">Xóa</button>
                  {!!Form::close()!!}
                </div>
              </div>
              @endforeach
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Lô đất <a href="#" type="button" class="btn btn-warning pull-right">Thêm mới</a></h1>
              </div>

              @foreach ($product as $item)
                <div class="col-lg-3 col-md-3 col-xs-6 thumb text-center">
                  <div class="row">
                    <a class="thumbnail"><img class="img-responsive" src="/upload/images/{!!$item->images!!}" alt="404"></a>
                    <a type="button" class="btn btn-info">Xem</a>
                    <a type="button" class="btn btn-success">Sửa</a>
                    {!!Form::open(array('route'=>array('product.destroy',$item->id),'method'=>'DELETE'))!!}
                      <button type="submit" class="btn btn-danger" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')">Xóa</button>
                    {!!Form::close()!!}
                  </div>
                </div>
                @endforeach
              </div>
@stop
