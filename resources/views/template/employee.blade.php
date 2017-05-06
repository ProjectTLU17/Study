@extends('template.menubar-employee')
@section('title','Nhân viên')
@section('main')
  <div id="fh5co-offcanvass">
    <a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i></a>
    <h1 class="fh5co-logo"><a class="navbar-brand" href="index.html">Các chức năng chính</a></h1>
    <ul>
      <li class="active"><a href="/">Trang chủ</a></li>
      <li><a href="{!!route('user.show', Auth::user()->id)!!}">Thông tin cá nhân</a></li>
      <li><a href="#">Quản lý thông tin sản phẩm</a></li>
      <li><a href="#">Quản lý thông tin lô đất</a></li>
      <li><a href="#">Quản lý thông tin chủ đầu tư</a></li>
      <li><a href="#">Làm hợp đồng</a></li>
      <li><a href="#">Tạo báo cáo thống kê</a></li>
    </ul>
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
          <a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
          <a class="navbar-brand">HomeLand Coperator</a>
        </div>
      </div>
    </div>
  </header>
  <!-- END .header -->


  <div id="fh5co-main">
    <div class="container">
      <div class="row">
        <div id="fh5co-board" data-columns>
          @foreach ($product as $item)
            <div class="item">
              <div class="animate-box">
                <a href="{!!route('product.show', $item->id)!!}" class="image-popup fh5co-board-img"><img src="upload/images/{!!$item->images!!}" alt="404"></a>
                <div class="fh5co-desc">{!!$item->details!!}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
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
          <p><small>&copy; Hydrogen Free HTML5 Template. All Rights Reserved. <br>Designed by: <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> | Images by: <a href="http://pexels.com" target="_blank">Pexels</a> </small></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Salvattore -->
  <script src="js/salvattore.min.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>

@stop
