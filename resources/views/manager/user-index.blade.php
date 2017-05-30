@extends('template.menubar-employee')
@section('title','Quản Lý Tài Khoản')
@section('main')
 <div class="row">
   <div class="col-md-12">
     @include('template.notice')
   </div>

 </div>
 <div class="row">


  <table class="table">
    <thead>
      <tr>

      </tr>
      <tr>
        <th>STT</th>
        <th>Họ Tên</th>
        <th>Tên tài khoản</th>
        <th>Chức vụ</th>
        <th><a type="button" class="btn-link" style="color:blue;" href="{!!route('user.create')!!}">Thêm</a></th>
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
            <button class="btn-link " onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit">Xóa</button>
          {!!Form::close()!!}
        </th>
        <th>
          <a class="btn-link" style="color:black;" href="{!!route('user.edit',$person->id)!!}">Sửa</a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@stop
