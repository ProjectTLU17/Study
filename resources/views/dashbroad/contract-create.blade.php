@extends('template.menubar-employee')
@section('title','Thêm mới hợp đồng')
@section('main')
  <ul class="nav nav-tabs">
    {{-- <li class="active"><a data-toggle="tab" href="#contract-buy">Mua bất động sản</a></li> --}}
    <li><a href={!!route('contract.index')!!}>Danh sách hợp đồng</a></li>
    <li class="active"><a data-toggle="tab" href="#contract-rent">Thuê bất động sản</a></li>
    <li><a data-toggle="tab" href="#contract-sell">Bán bất động sản</a></li>
  </ul>
  <div class="tab-content" style="padding-top:50px;">
    <div id="contract-rent" class="tab-pane fade in active">
      {!!Form::open(array('route'=>['contract.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
      <div class="row contract-form">
        <h2 style="text-align:center;">HỢP ĐỒNG THUÊ BẤT ĐỘNG SẢN</h2>
      </div>
      <div class="col-md-12">
        @include('template.notice')
      </div>

      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="id">Mã hợp đồng: </label>
            <input class="form-control" name="id" disabled placeholder="Auto generate">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="name">Tên hợp đồng: </label>
            <input class="form-control" name="name">
          </div>
          <div class="col-md-4" hidden>
            <input class="form-control" name="type" value="rent">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="customer">Khách hàng: </label>
            <select class="form-control" name="customer_id">
              <optgroup label="Khách hàng">
                @foreach ($customer as $element)
                  <option value={!!$element->id!!}>{!!$element->name!!}</option>
                @endforeach
              </optgroup>
            </select>
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="product">Sản phẩm: </label>
            <select class="form-control" name="product_id">
              <optgroup label="Sản phẩm">
                @foreach ($product as $element)
                  @if ($element->status=='available')
                    <option value={!!$element->id!!}>{!!$element->name!!}</option>
                  @endif
                @endforeach
              </optgroup>
            </select>
          </div>
          <div class="col-md-4">
            <label class="control-label" for="startdate">Ngày bắt đầu: </label>
            <input type="date" class="form-control" name="startdate" >
          </div>
          <div class="col-md-4">
            <label class="control-label" for="enddate">Ngày kết thúc: </label>
            <input type="date" class="form-control" name="expdate">
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4" hidden>
            <label class="control-label" for="status">Trạng thái: </label>
            <input  class="form-control" name="status" value="pending">
          </div>
          <div class="col-md-4" hidden>
            <label class="control-label" for="users_id">Trạng thái: </label>
            <input  class="form-control" name="users_id" value={!!Auth::user()->id!!}>
          </div>
        </div>
      </div>
      <div class="row contract-row contract-end">
        <div class="form-group">
          <div class="col-md-12">
            <label class="control-label" for="decription">Mô tả thêm về hợp đồng: </label>
            <textarea name="decription" class="form-control" cols="100" rows="5"></textarea>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top:20px;">
        <div class="form-group">
          <div class="col-md-12">
            <button class="btn pull-right" type="submit">Thêm mới</button>
          </div>
        </div>
      </div>
      {!!Form::close() !!}
    </div>

    <div id="contract-sell" class="tab-pane fade in active">
      {!!Form::open(array('route'=>['contract.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
      <div class="row contract-form">
        <h2 style="text-align:center;">HỢP ĐỒNG BÁN BẤT ĐỘNG SẢN</h2>
      </div>
      <div class="col-md-12">
        @include('template.notice')
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="id">Mã hợp đồng: </label>
            <input class="form-control" name="id" disabled placeholder="Auto generate">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="name">Tên hợp đồng: </label>
            <input class="form-control" name="name">
          </div>
          <div class="col-md-4">
            <label class="control-label" for="type">Tên sản phẩm: </label>
            <select class="form-control" name="product_id">
              <optgroup label="Sản phẩm">
                @foreach ($product as $element)
                  @if ($element->status=='available')
                    <option value={!!$element->id!!}>{!!$element->name!!}</option>
                  @endif
                @endforeach
              </optgroup>
            </select>
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="customer">Khách hàng: </label>
            <select class="form-control" name="customer_id">
              <optgroup label="Khách hàng">
                @foreach ($customer as $element)
                  <option value={!!$element->id!!}>{!!$element->name!!}</option>
                @endforeach
              </optgroup>
            </select>
          </div>
          <div class="col-md-4" hidden>
            <label class="control-label" for="status">Trạng thái: </label>
            <input  class="form-control" name="status" value="pending">
            <input class="form-control" name="type" value="sell">
          </div>
          <div class="col-md-4" hidden>
            <label class="control-label" for="users_id">Trạng thái: </label>
            <input  class="form-control" name="users_id" value={!!Auth::user()->id!!}>
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="startdate">Ngày làm hợp đồng: </label>
            <input type="date" class="form-control" name="startdate">
          </div>
        </div>
      </div>
      <div class="row contract-row contract-end">
        <div class="form-group">
          <div class="col-md-12">
            <label class="control-label" for="decription">Mô tả thêm về hợp đồng: </label>
            <textarea name="decription" class="form-control" cols="100" rows="5"></textarea>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top:20px;">
        <div class="form-group">
          <div class="col-md-12">
            <button class="btn pull-right" type="submit">Thêm mới</button>
          </div>
        </div>
      </div>
      {!!Form::close() !!}
    </div>
  </div>
@stop
