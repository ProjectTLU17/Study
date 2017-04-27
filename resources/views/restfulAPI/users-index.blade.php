@extends('template.layouts')
@section('title','Đăng Nhập')
@section('header')
@endsection
@section('main')
  <table class="table table-bordered">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ Tên</th>
                  <th>Tên tài khoản</th>
                  <th>Chức vụ</th>
                  <th>Xóa</th>
                  <th>Sửa</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $stt=0;
                @endphp
                @foreach ($users as $person)
                  @php
                    $stt++;
                  @endphp
                <tr>
                  <th scope="row">{{$stt}}</th>
                  <td>{{$person->name}}</td>
                  <td>{{$person->username}}</td>
                  <td>{{$person->role}}</td>
                  <th>
                    {!!Form::open(array('route'=>array('users.destroy',$person->id),'method'=>'DELETE'))!!}
                      <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit" id="delete" class="btn btn-link">Xóa</button>
                    {!!Form::close()!!}
                  </th>
                  <th><a href="{!!route('users.edit',$person->id)!!}">Sửa</a></th>
                </tr>
                @endforeach
              </tbody>
  </table>
@stop
