<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="shortcut icon" href="img/favicon.png"/>
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        <ul>
          <li><a class="active" href="#">Trang chủ</a></li>
          <li><a href='#'>Cấu hình</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Quản lý</a>
              <div class="dropdown-content">
                <a href="/manager/users">Quản lý tài khoản</a>
                <a href="#">Quản lý thông tin lô đất</a>
                <a href="#">Quản lý thông tin sản phẩm</a>
                <a href="#">Quản lý thông tin chủ đầu tư</a>
              </div></li>
          <li><a href="#">Thống kê báo cáo</a></li>
          <li><a href="#">Thông báo</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      </div>
      <div class="main">
        @yield('main')
      </div>
      <div class="footer">
        @yield('footer')
      </div>
    </div>
  </body>
</html>
