@extends('template.layouts')
@section('title','Nhân viên')
@section('main')
  @if(Auth::user()->role=="manager")
    <a href="/manager/users">Quản lý tài khoản</a>
@endif
  <a type="button" href="/logout">Logout</a>
@endsection
