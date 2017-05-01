
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/loginstyle.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        @yield('header')
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
