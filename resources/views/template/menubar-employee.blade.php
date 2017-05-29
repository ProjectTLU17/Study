<!DOCTYPE html>
<html class="no-js">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

  <!-- Google Webfonts -->
  <link href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,300,100,500')}}" rel='stylesheet' type='text/css'>
  <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel='stylesheet' type='text/css'>

  <!-- Animate.css -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <!-- Salvattore -->
  <link rel="stylesheet" href="{{asset('css/salvattore.css')}}">
  <!-- Theme Style -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- Modernizr JS -->
  <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
  </head>
  <body>
    <div id="fh5co-offcanvass">
      <a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i></a>
      <h1 class="fh5co-logo"><a class="navbar-brand">Các chức năng chính</a></h1>
      @if (Auth::user()->role=='manager')
        <ul>
          <li class="active"><a href="/">Trang chủ</a></li>
          <li><a href="#">Cấu hình hệ thống</a></li>
          <li><a href="{!!route('user.show', Auth::user()->id)!!}">Thông tin cá nhân</a></li>
          <li><a href="{!!route('user.index')!!}">Tài khoản</a></li>
          <li><a href="{!!route('project.index')!!}">Dự án</a></li>
          <li><a href="{!!route('land.index')!!}">Lô sản phẩm</a></li>
          <li><a href="{!!route('product.index')!!}">Sản phẩm</a></li>
          <li><a href="{!!route('customer.index')!!}">Khách hàng</a></li>
          <li><a href="{!!route('suplier.index')!!}">Nhà cung cấp</a></li>
          <li><a href="{!!route('contract.index')!!}">Hợp đồng</a></li>
          <li><a href="{!!route('statistic')!!}">Thống kê dữ liệu</a></li>
          <li><a href="#">Thông báo</a></li>
          <li><a href="{!!route('logout')!!}">Đăng xuất</a></li>
        </ul>
      @else
        <ul>
          <li class="active"><a href="/">Trang chủ</a></li>
          <li><a href="{!!route('user.show', Auth::user()->id)!!}">Thông tin cá nhân</a></li>
          <li><a href="{!!route('project.index')!!}">Dự án</a></li>
          <li><a href="{!!route('land.index')!!}">Lô sản phẩm</a></li>
          <li><a href="{!!route('product.index')!!}">Sản phẩm</a></li>
          <li><a href="{!!route('customer.index')!!}">Khách hàng</a></li>
          <li><a href="{!!route('suplier.index')!!}">Nhà cung cấp</a></li>
          <li><a href="{!!route('contract.index')!!}">Hợp đồng</a></li>
          <li><a href="#">Báo cáo thống kê</a></li>
          <li><a href="{!!route('logout')!!}">Đăng xuất</a></li>
        </ul>
      @endif

      <h3 class="fh5co-lead">Mạng xã hội</h3>
      <p class="fh5co-social-icons">
        <a href="#"><i class="icon-twitter"></i></a>
        <a href="#"><i class="icon-facebook"></i></a>
        <a href="#"><i class="icon-instagram"></i></a>
        <a href="#"><i class="icon-dribbble"></i></a>
        <a href="#"><i class="icon-youtube"></i></a>
      </p>
    </div>
    <header id="fh5co-header" role="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a href=# class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
            <a class="navbar-brand">HomeLand Coperation</a>
          </div>
        </div>
      </div>
    </header>
    <!-- END .header -->
    <div class="container">
      @yield('main')
    </div>
    <footer id="fh5co-footer">
      <div class="container">
        <div class="row row-padded">
          <div class="col-md-12 text-center">
            <p class="fh5co-social-icons">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-instagram"></i></a>
              <a href="#"><i class="icon-dribbble"></i></a>
              <a href="#"><i class="icon-youtube"></i></a>
            </p>
          </div>
        </div>
      </div>
    </footer>

      <!-- jQuery -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <!-- jQuery Easing -->
      <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
      <!-- Bootstrap -->
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- Waypoints -->
      <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
      <!-- Magnific Popup -->
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Salvattore -->
      <script src="{{asset('js/salvattore.min.js')}}"></script>
      <!-- Main JS -->
      <script src="{{asset('js/main.js')}}"></script>
      <script type="text/javascript">
              function xacnhanxoa(msg) {
                  if (window.confirm(msg)) {
                      return true;
                  }
                  return false;
              }
          </script>
  </body>
</html>
