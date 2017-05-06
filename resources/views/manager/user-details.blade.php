@extends('template.layouts')
@section('title','Thông tin cá nhân')
@section('main')
<div id="contact" class="container">
  <form id="contact" class="center">
    <h3>Thông tin cá nhân nhân viên</h3>
    <br>
    <fieldset>
      <label>Name: </label><input value="{!!$user->name!!}" disabled>

      <label>Tên tài khoản: </label><input value="{!!$user->username!!}" disabled>

      <label>Birthday: </label><input value="{!!$user->birthday!!}" disabled>

      <label>Address: </label><input value="{!!$user->address!!}" disabled>

      <label>Phone: </label><input value="{!!$user->phone!!}" disabled>

      <label>Email: </label><input value="{!!$user->email!!}" disabled>

      <label>Job Role: </label><input value="{!!$user->role!!}" disabled>
    </fieldset>
  </form>
</div>
@stop
