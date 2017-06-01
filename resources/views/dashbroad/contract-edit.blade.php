@extends('template.menubar-employee')
@section('title',$contract->name)
@section('main')
  <ul class="nav nav-tabs">
    <li><a href={!!route('contract.index')!!}>Danh sách hợp đồng</a></li>
    <li class="active"><a data-toggle="tab" href="#contract-edit">{!!$contract->name!!}</a></li>
  </ul>
  <div class="tab-content" style="padding-top:50px;">
    <div id="contract-edit" class="tab-pane fade in active">
      {!!Form::open(array('route'=>['contract.update',$contract->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
      {!!Form::token()!!}
      <div class="row contract-form">
        <h2 style="text-align:center;">{!!$contract->name!!}</h2>
        @include('template.notice')
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-4">
            <label class="control-label" for="id">Mã hợp đồng: </label>
            <input class="form-control" name="id" disabled value={!!$contract->id!!}>
          </div>
          <div class="col-md-4">
            <label class="control-label" for="name">Tên hợp đồng: </label>
            <input class="form-control" name="name" value="{!!$contract->name!!}"></input>
          </div>
          <div class="col-md-4">
            <label class="control-label" for="name">Loại hợp đồng: </label>
            <input class="form-control" name="type" value="{!!$contract->type!!}" disabled></input>
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-3">
            <label class="control-label" for="customer">Khách hàng: </label>
            <select class="form-control" name="customer_id">
              <optgroup label="Khách hàng">
                @foreach ($customer as $element)
                  @if ($element->id==$contract->customer_id)
                      <option value={!!$element->id!!} selected>{!!$element->name!!}</option>
                    @else
                      <option value={!!$element->id!!}>{!!$element->name!!}</option>
                  @endif
                @endforeach
              </optgroup>
            </select>
          </div>
          <div class="col-md-3">
            <label class="control-label" for="employee">Nhân viên làm hợp đồng: </label>
            <select class="form-control" name="users_id">
              <optgroup label="Khách hàng">
                @foreach ($user as $element)
                  @if ($element->id==$contract->users_id)
                      <option value={!!$element->id!!} selected>{!!$element->name!!}</option>
                    @else
                      <option value={!!$element->id!!}>{!!$element->name!!}</option>
                  @endif
                @endforeach
              </optgroup>
            </select>
          </div>
          <div class="col-md-3">
            <label class="control-label" for="product_id">Sản phẩm: </label>
            <input name="product_id" value="{!!$contract->product_id!!}" hidden>
            <input class="form-control" value="{!!$contract->product->name!!}" disabled>
          </div>
          <div class="col-md-3">
            <label class="control-label" for="price">Giá sản phẩm: </label>
            <input class="form-control" name="price" value="{!!$contract->product->price!!}">
          </div>
        </div>
      </div>
      <div class="row contract-row">
        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="startdate">Ngày bắt đầu: </label>
            <input type="text" class="form-control" name="startdate" value="{!!$contract->startdate!!}" placeholder="{!!$contract->startdate!!}" onfocus="(this.type='date')"  >
          </div>
          @if ($contract->type=='rent')
              <div class="col-md-6">
                <label class="control-label" for="expdate">Ngày hết hạn: </label>
                <input type="text" class="form-control" name="expdate" value="{!!$contract->expdate!!}" placeholder="{!!$contract->expdate!!}" onfocus="(this.type='date')">
              </div>
          @endif
          <div class="col-md-6">
            <label class="control-label" for="status">Trạng thái: </label>
            <select class="form-control" name="status">
              <optgroup>
                <option value="pending" @if ($contract->status=="pending")
                  selected
                @endif >Chờ duyệt</option>
                <option value="active"@if ($contract->status=="active")
                  selected
                @endif>Hoạt động</option>
                <option value="done"@if ($contract->status=="done")
                  selected
                @endif>Hoàn thành</option>
              </optgroup>
            </select>
          </div>
        </div>
      </div>
      <div class="row contract-row contract-end">
        <div class="form-group">
          <div class="col-md-12">
            <label class="control-label" for="decription">Mô tả thêm về hợp đồng: </label>
            <textarea name="decription" class="form-control" cols="100" rows="5" >{!!$contract->decription!!}</textarea>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top:20px;">
        <div class="form-group">
          <div class="col-md-12">
            <a type="button" class="btn btn-warning pull-right" href="{{ URL::previous() }}">Hủy bỏ</a>
            <button class="btn btn-info pull-right" type="submit">Cập Nhật</button>
          </div>
        </div>
      </div>
      {!!Form::close() !!}
    </div>
  </div>
@stop
