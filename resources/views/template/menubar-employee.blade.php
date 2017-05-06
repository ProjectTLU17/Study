<!DOCTYPE html>
<html class="no-js">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="images/favicon.png">

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
  <script src="js/modernizr-2.6.2.min.js"></script>

  </head>
  <body>
    <div>
      @yield('main')
    </div>
  </body>
</html>
