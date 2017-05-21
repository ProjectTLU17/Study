@extends('template.menubar-employee')
@section('title','Thông tin dự án')
@section('main')

  <ul class="nav nav-tabs">
    <li ><a  href="{!!route('project.index')!!}">Danh sách dự án</a></li>
    <li class="active"><a href="#project-edit">Thông tin dự án</a></li>
  </ul>
  <div class="tab-content" style="padding-top:50px;">
    <div>
      {!!Form::open(array('route'=>['project.update',$project->id], 'class'=>'form-horizontal','method'=>'PUT'))!!}
      {!!Form::token()!!}
          <div class="form-group">
            <div class="alert text-center">
              @foreach ($errors->all() as $error)
                <p style="color:red">{!!$error!!}</p>
              @endforeach
            </div>
            <label class="control-label col-md-3" for="name">Tên Dự Án: </label>
            <div class="col-md-9">
              <input class="form-control" name="name" value="{!!$project->name!!}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="decription">Mô Tả: </label>
            <div class="col-md-9">
              <input class="form-control" name="decription" value="{!!$project->decription!!}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="startdate">Ngày Bắt Đầu: </label>
            <div class="col-md-9">
              <input class="form-control" type="date" name="startdate" value="{!!$project->startdate!!}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="expdate">Ngày Kết Thúc: </label>
            <div class="col-md-9">
              <input class="form-control" type="date" name="expdate" value="{!!$project->expdate!!}">
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
