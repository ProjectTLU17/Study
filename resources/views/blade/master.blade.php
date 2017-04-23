<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>@yield('title')</title>
    <link rel="stylesheet"href="{{asset('blade/css/mystyle.css')}}">
    {{--cũng có thể thêm đường dẫn như bình thường được không vấn đề gì hết--}}
    {{--với trường hợp https thì thêm đối số true cho lệnh asset--}}
  </head>
  <body>
      <div id="wrapper">
        @include('blade.merquee',['mar_content'=>'Khóa học lập trình'])
        <div id="header">
          @section('sidebar')
            Đây là menu
            {{-- comment --}}
          @show
        </div>
        <div id="content">
          @yield('noidung')
        </div>
        <div id="footer"></div>
      </div>
  </body>
</html>
