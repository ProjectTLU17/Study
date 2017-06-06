@extends('template.menubar-employee')
@section('title','Quản lý khách hàng')
@section('main')

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#customer-index">Danh sách khách hàng</a></li>
    <li><a data-toggle="tab" href="#customer-create">Thêm mới khách hàng</a></li>

  </ul>

  <div class="tab-content" style="padding-top:50px;">
    <div id="customer-index" class="tab-pane fade in active">
      @include('template.notice')
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
              $stt=0;
            @endphp
            @foreach ($customer as $person)
            @php
              $stt++;
            @endphp
            <th scope="row">{{$stt}}</th>
            <td>{{$person->name}}</td>
            <td>{{$person->phone}}</td>
            <td>{{$person->email}}</td>
            <th>
              {!!Form::open(array('route'=>array('customer.destroy',$person->id),'method'=>'DELETE'))!!}
                <button class="btn-link " onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit">Xóa</button>
              {!!Form::close()!!}
            </th>
            <th>
              <a class="btn-link" style="color:black;"  href="{!!route('customer.edit',$person->id)!!}">Sửa</a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div id="customer-create" class="tab-pane fade">
      {!!Form::open(array('route'=>['customer.store'], 'class'=>'form-horizontal'))!!}
      {!!Form::token()!!}
          <div class="form-group">
            <div class="alert text-center">
              @foreach ($errors->all() as $error)
                <p style="color:red">{!!$error!!}</p>
              @endforeach
            </div>
            <label class="control-label col-md-3" for="name">Họ và tên: </label>
            <div class="col-md-9">
              <input class="form-control" name="name" placeholder="Họ và tên của khách hàng@name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="phone">Telephone: </label>
            <div class="col-md-9">
              <input class="form-control" name="phone" placeholder="Số điện thoại liên lạc ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Email: </label>
            <div class="col-md-9">
              <input class="form-control" name="email" placeholder="Email liên lạc ...">
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
