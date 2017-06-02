@extends('template.menubar-employee')
@section('title','Thông tin cá nhân')
@section('main')

  <h2 class="text-center">Thông tin cá nhân</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="col-md-12">
      @include('template.notice')
    </div>

    <div class="form-group">
      <div class="col-md-1"></div>
      <label class="control-label col-md-2" for="email">Họ và tên: </label>
      <div class="col-md-6">
        <input class="form-control" value="{!!Auth::user()->name!!}" disabled>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-1"></div>
      <label class="control-label col-md-2" for="email">Tên đăng nhập: </label>
      <div class="col-md-6">
        <input class="form-control" value="{!!Auth::user()->username!!}" disabled>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-1"></div>
      <label class="control-label col-md-2" for="email">Job Role: </label>
      <div class="col-md-6">
        <input class="form-control" value="{!!Auth::user()->role!!}" disabled>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-1"></div>
      <label class="control-label col-md-2" for="email">Birthday: </label>
      <div class="col-md-6">
        <input class="form-control" value="{!!Auth::user()->birthday!!}" disabled>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-1"></div>
      <label class="control-label col-md-2" for="email">Address: </label>
      <div class="col-md-6">
        <input class="form-control" value="{!!Auth::user()->address!!}" disabled>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-1"></div>
      <label class="control-label col-md-2" for="email">Telephone: </label>
      <div class="col-md-6">
        <input class="form-control" value="{!!Auth::user()->phone!!}" disabled>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-1"></div>
      <label class="control-label col-md-2" for="email">Email: </label>
      <div class="col-md-6">
        <input class="form-control" value="{!!Auth::user()->email!!}" disabled>
      </div>
    </div>
  </form>
@stop
