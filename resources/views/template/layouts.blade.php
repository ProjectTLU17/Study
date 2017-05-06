<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="shortcut icon" href="/img/favicon.png"/>
    <link rel="stylesheet" href="{{asset('js/index.js')}}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
      </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
      </script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        @if (Auth::check() && Auth::user()->role=="employee")
        <ul>
          <li><a class="active" href="/">Trang chủ</a></li>
          <li><a href='#'>Cấu hình</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Quản lý</a>
              <div class="dropdown-content">
                <a href="{!!route('user.show',Auth::user()->id)!!}">Thông tin cá nhân</a>
                <a href="#">Quản lý thông tin lô đất</a>
                <a href="#">Quản lý thông tin sản phẩm</a>
                <a href="#">Quản lý thông tin chủ đầu tư</a>
              </div></li>
          <li><a href="#">Thống kê báo cáo</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      @endif
        @if (Auth::check() && Auth::user()->role=="manager")
        <ul>
          <li><a class="active" href="/manager">Trang chủ</a></li>
          <li><a href='#'>Cấu hình</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Quản lý</a>
              <div class="dropdown-content">
                <a href="{!!route('user.index')!!}">Quản lý tài khoản</a>
                <a href="{!!route('user.show', Auth::user()->id)!!}">Thông tin cá nhân</a>
                <a href="#">Quản lý thông tin lô đất</a>
                <a href="#">Quản lý thông tin sản phẩm</a>
                <a href="#">Quản lý thông tin chủ đầu tư</a>
              </div></li>
          <li><a href="#">Thống kê báo cáo</a></li>
          <li><a href="#">Thông báo</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      @endif
      </div>
      <div class="main">
        @yield('main')
      </div>
      <div class="footer">
        @yield('footer')
      </div>
    </div>
  </body>
  <script type="text/javascript">
          function xacnhanxoa(msg) {
              if (window.confirm(msg)) {
                  return true;
              }
              return false;
          }
      </script>
</html>
