@if (count($errors)>0)
  <ul>
    @foreach ($errors->all() as $error)
      <li>{!!$error!!}</li>
    @endforeach
  </ul>
@endif
{!!Form::open(['route'=>'sendAcc','name'=>'frmacc','enctype'=>'multipart/form-data','file'=>true])!!}
{!!Form::token()!!}
{!!Form::label('hoten','Họ Tên')!!}
{!!Form::text('txtHoten','',array('class'=>'input','placeholder'=>'Nhập họ và tên')) !!}
{!!$errors->first('txtHoten')!!}<br>
{!!Form::label('pwd','Mật Khẩu')!!}
{!!Form::password('password',['class'=>'input','placeholder'=>'Nhập mật khẩu']) !!}<br>
{!!Form::label('img','Ảnh')!!}
{!!Form::file('img') !!}<br>
{{--{!!Form::file('fImage')!!}--}}
{!!Form::submit('Gửi')!!}
{!!Form::button('Logout',['action'=>Auth::logout()])!!}
{!!Form::close() !!}
@if (Auth::check())
  {!!Auth::user()->name!!}
@endif
