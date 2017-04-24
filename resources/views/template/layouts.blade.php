<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>@yield('title')</title>
    <link rel="stylesheet"href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="" type="image/x-icon"> {{--icon trên tiêu đề trang--}}
    {{--bootrsap--}}
    {{ HTML::style('path/to/bootstrap.css') }}
    {{ HTML::script('path/to/jquery.js') }}
    {{ HTML::script('path/to/bootstrap.js') }}
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        @yield('header')
      </div>
      <div class="content">
        @yield('main')
      </div>
      <div class="footer">
        @yield('footer')
      </div>
    </div>
  </body>
</html>
