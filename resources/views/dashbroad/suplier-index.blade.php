@extends('template.menubar-employee')
@section('title','Quản lý nhà cung cấp')
@section('main')

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#suplier-index">Danh sách nhà cung cấp</a></li>
    <li><a data-toggle="tab" href="#suplier-create">Thêm mới nhà cung cấp</a></li>

  </ul>

  <div class="tab-content" style="padding-top:50px;">
    <div id="suplier-index" class="tab-pane fade in active">
      @include('template.notice')
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên Nhà Cung Cấp</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
              $stt=0;
            @endphp
            @foreach ($suplier as $person)
            @php
              $stt++;
            @endphp
            <th scope="row">{{$stt}}</th>
            <td>{{$person->name}}</td>
            <td>{{$person->email}}</td>
            <th>
              {!!Form::open(array('route'=>array('suplier.destroy',$person->id),'method'=>'DELETE'))!!}
                <button class="btn-link " onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit">Xóa</button>
              {!!Form::close()!!}
            </th>
            <th>
              <a class="btn-link" style="color:black;"  href="{!!route('suplier.edit',$person->id)!!}">Chi tiết</a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div id="suplier-create" class="tab-pane fade">
      {!!Form::open(array('route'=>['suplier.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
          <div class="form-group">
            <div class="alert text-center">
              @foreach ($errors->all() as $error)
                <p style="color:red">{!!$error!!}</p>
              @endforeach
            </div>
            <label class="control-label col-md-3" for="name">Họ và tên: </label>
            <div class="col-md-9">
              <input class="form-control" name="name" placeholder="Nhập vào tên nhà cung cấp ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="phone">Telephone: </label>
            <div class="col-md-9">
              <input class="form-control" name="phone" placeholder="Nhập vào số điện thoại liên lạc ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="address">Address: </label>
            <div class="col-md-9">
              <input class="form-control" name="address" placeholder="Nhập vào địa chỉ liên lạc ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Email: </label>
            <div class="col-md-9">
              <input class="form-control" name="email" placeholder="Nhập vào email liên lạc ...">
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
