@extends('template.menubar-employee')
@section('title','Quản lý lô sản phẩm')
@section('main')

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#land-index">Danh sách lô</a></li>
    <li><a data-toggle="tab" href="#land-create">Thêm mới lô</a></li>

  </ul>

  <div class="tab-content" style="padding-top:50px;">
    <div id="land-index" class="tab-pane fade in active">
      @include('template.notice')
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên Lô</th>
            <th>Mô Tả</th>
            <th>Thuộc dự án</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
              $stt=0;
            @endphp
            @foreach ($land as $item)
            @php
              $stt++;
            @endphp
            <th scope="row">{{$stt}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->decription}}</td>
            <td>{{$item->project->name}}</td>
            <th>
              {!!Form::open(array('route'=>array('land.destroy',$item->id),'method'=>'DELETE'))!!}
                <button class="btn-link " onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit">Xóa</button>
              {!!Form::close()!!}
            </th>
            <th>
              <a class="btn-link" style="color:black;"  href="{!!route('land.edit',$item->id)!!}">Chi Tiết</a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div id="land-create" class="tab-pane fade">
      {!!Form::open(array('route'=>['land.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
          <div class="form-group">
            <div class="alert text-center">
              @foreach ($errors->all() as $error)
                <p style="color:red">{!!$error!!}</p>
              @endforeach
            </div>
            <label class="control-label col-md-3" for="name">Tên Lô: </label>
            <div class="col-md-9">
              <input class="form-control" name="name" placeholder="Nhập vào tên lô sản phẩm ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="decription">Mô Tả: </label>
            <div class="col-md-9">
              <input class="form-control" name="decription" placeholder="Mô tả một chút về lô sản phẩm này ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="project_id">Dự án: </label>
            <div class="col-md-9">
              <select class="form-control" name="project_id">
                <optgroup label="Dự Án">
                @foreach ($project as $item_proj)
                    <option value="{{$item_proj->id}}">{{$item_proj->name}}</option>
                @endforeach
                </optgroup>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">

              <button class="btn btn-info pull-right" type="submit">Thêm mới</button>
            </div>
          </div>
      {!!Form::close() !!}
    </div>
  </div>
@stop
