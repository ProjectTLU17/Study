@extends('template.menubar-employee')
@section('title','Quản lý khách hàng')
@section('main')
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Họ Tên</th>
        <th>Tên tài khoản</th>
        <th>Chức vụ</th>
        <th><a type="button" class="btn-link" style="color:blue;" href="{!!route('customer.create')!!}">Thêm</a></th>
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
        <td>{{$person->customername}}</td>
        <td>{{$person->role}}</td>
        <th>
          {!!Form::open(array('route'=>array('customer.destroy',$person->id),'method'=>'DELETE'))!!}
            <button class="btn-link " onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit">Xóa</button>
          {!!Form::close()!!}
        </th>
        <th>
          <a class="btn-link" style="color:black;" href="{!!route('customer.edit',$person->id)!!}">Sửa</a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop
