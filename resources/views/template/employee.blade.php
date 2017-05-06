@extends('template.menubar-employee')
@section('title','Trang Chủ')
@section('main')
  <div id="fh5co-main">
    <div class="container">
      <div class="row">
        <div id="fh5co-board" data-columns>
          @foreach ($product as $item)
            <div class="item">
              <div class="animate-box">
                <a href="{!!route('product.show', $item->id)!!}" class="image-popup fh5co-board-img"><img src="upload/images/{!!$item->images!!}" alt="404"></a>
                <div class="fh5co-desc">{!!$item->details!!}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@stop
