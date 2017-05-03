@extends('template.layouts')
@section('title','Quản Lý Tài Khoản')
@section('main')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Họ Tên</th>
        <th>Tên tài khoản</th>
        <th>Chức vụ</th>
        <th><button type="button" class="button" href="#">Thêm</button></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @php
          $stt=0;
        @endphp
        @foreach ($user as $person)
        @php
          $stt++;
        @endphp
        <th scope="row">{{$stt}}</th>
        <td>{{$person->name}}</td>
        <td>{{$person->username}}</td>
        <td>{{$person->role}}</td>
        <th>
          {!!Form::open(array('route'=>array('user.destroy',$person->id),'method'=>'DELETE'))!!}
            <button class="button" onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit" id="delete">Xóa</button>
          {!!Form::close()!!}
        </th>
        <th>
          <button class="button" href="{!!route('user.edit',$person->id)!!}">Sửa</button>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop
