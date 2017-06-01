@extends('template.menubar-employee')
@section('title','Quản lý dự án')
@section('main')

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#project-index">Danh sách dự án</a></li>
    <li><a data-toggle="tab" href="#project-create">Thêm mới dự án</a></li>

  </ul>

  <div class="tab-content" style="padding-top:50px;">
    <div id="project-index" class="tab-pane fade in active">
      @include('template.notice')
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên Dự Án</th>
            <th>Mô Tả</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
              $stt=0;
            @endphp
            @foreach ($project as $item)
            @php
              $stt++;
            @endphp
            <th scope="row">{{$stt}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->decription}}</td>
            <th>
              {!!Form::open(array('route'=>array('project.destroy',$item->id),'method'=>'DELETE'))!!}
                <button class="btn-link " onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit">Xóa</button>
              {!!Form::close()!!}
            </th>
            <th>
              <a class="btn-link" style="color:black;"  href="{!!route('project.edit',$item->id)!!}">Chi Tiết</a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div id="project-create" class="tab-pane fade">
      {!!Form::open(array('route'=>['project.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
          <div class="form-group">
            <div class="alert text-center">
              @foreach ($errors->all() as $error)
                <p style="color:red">{!!$error!!}</p>
              @endforeach
            </div>
            <label class="control-label col-md-3" for="name">Tên Dự Án: </label>
            <div class="col-md-9">
              <input class="form-control" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="decription">Mô Tả: </label>
            <div class="col-md-9">
              <input class="form-control" name="decription" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="startdate">Ngày Bắt Đầu: </label>
            <div class="col-md-9">
              <input class="form-control" type="date" name="startdate" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="expdate">Ngày Kết Thúc: </label>
            <div class="col-md-9">
              <input class="form-control" type="date" name="expdate" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <a type="button" class="btn btn-warning pull-right" href="{{ URL::previous() }}">Hủy bỏ</a>
              <button class="btn btn-info pull-right" type="submit">Thêm mới</button>
            </div>
          </div>
      {!!Form::close() !!}
    </div>
  </div>
@stop
