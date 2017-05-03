@extends('template.layouts')
@section('title','Nhân viên')
@section('main')
  @if(Auth::user()->role=="manager")
    <a href="/manager/user">Quản lý tài khoản</a>
@endif
  <a type="button" href="/logout">Logout</a>
@endsection
