@extends('template.menubar-employee')
@section('title','Thông tin lô sản phẩm')
@section('main')

  <ul class="nav nav-tabs">
    <li ><a  href="{!!route('land.index')!!}">Danh sách lô</a></li>
    <li class="active"><a href="#land-edit">Thông tin lô</a></li>
  </ul>
  <div class="tab-content" style="padding-top:50px;">
    <div>
      {!!Form::open(array('route'=>['land.update',$land->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
      {!!Form::token()!!}
        <div class="form-group">
          <div class="alert text-center">
            @foreach ($errors->all() as $error)
              <p style="color:red">{!!$error!!}</p>
            @endforeach
          </div>
          <label class="control-label col-md-3" for="name">Tên Lô: </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="{!!$land->name!!}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3" for="decription">Mô Tả: </label>
          <div class="col-md-9">
            <input class="form-control" name="decription" value="{!!$land->decription!!}" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3" for="project_id">Dự án: </label>
          <div class="col-md-9">
            <select class="form-control" name="project_id">
              <optgroup label="Dự Án">
                @foreach ($project as $item_proj)
                  @if ($item_proj->id==$land->project_id)
                      <option value="{{$item_proj->id}}" selected>{{$item_proj->name}}</option>
                    @else
                      <option value="{{$item_proj->id}}">{{$item_proj->name}}</option>
                  @endif
                @endforeach
              </optgroup>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button class="btn pull-right" type="submit">Cập Nhật</button>
          </div>
        </div>
      {!!Form::close() !!}
    </div>
  </div>
@stop
