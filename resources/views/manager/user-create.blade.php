@extends('template.layouts')
@section('title','Sign Up Form')
@section('main')
  {!!Form::open(array('route'=>'user.store', 'class'=>'Sign-up-form'))!!}
  <form class="Sign-up-form" method="post">
  {!!Form::token()!!}
    <h1>Sign Up</h1>

    <fieldset>
      <legend>Basic info</legend>
      <label for="name">Name:</label>
      <input type="text" name="name" required="required">
      <label for="name">Tên tài khoản:</label>
      <input type="text" name="username" required="required">
      <label for="password">Password:</label>
      <input type="password" name="password" required="required">
      <label for="name">Birthday:</label>
      <input type="date" name="birthday">
      <label for="name">Address:</label>
      <input type="text" name="address">
      <label for="name">Phone:</label>
      <input type="text" name="phone">
      <label for="mail">Email:</label>
      <input type="email" name="email">
      <label for="job">Job Role:</label>
      <select name="role">
        <optgroup label="Role">
          <option value="manager">Manager</option>
          <option value="employee">Employee</option>
        </optgroup>
      </select>
    </fieldset>
    <button class="button" type="submit" href="{}">Sign Up</button>
  {!!Form::close() !!}
@stop
