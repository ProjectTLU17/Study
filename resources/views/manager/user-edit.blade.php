@extends('template.layouts')
@section('title','Edit Form')
@section('main')
  {!!Form::open(array('route'=>['user.update',$user->id], 'class'=>'Sign-up-form','method'=>'PUT'))!!}
  {!!Form::token()!!}

    <fieldset>
      <legend>Information</legend>
      <label for="name">Name:</label>
      <input type="text" name="name" value="{!!$user->name!!}" required="required">
      <label for="name">Tên tài khoản:</label>
      <input type="text" name="username" value="{!!$user->username!!}"required="required">
      <label for="password">Password:</label>
      <input type="password" name="password" value="{!!$user->password!!}" required="required">
      <label for="name">Birthday:</label>
      <input type="date" name="birthday" value="{!!$user->birthday!!}">
      <label for="name">Address:</label>
      <input type="text" name="address" value="{!!$user->address!!}">
      <label for="name">Phone:</label>
      <input type="text" name="phone" value="{!!$user->phone!!}">
      <label for="mail">Email:</label>
      <input type="email" name="email" value="{!!$user->email!!}">
      <label for="job">Job Role:</label>
      <select name="role">
        <optgroup label="Role">
          <option value="manager">Manager</option>
          <option value="employee">Employee</option>
        </optgroup>
      </select>
    </fieldset>
    <button class="button" type="submit">Edit</button>
  {!!Form::close() !!}
@stop
