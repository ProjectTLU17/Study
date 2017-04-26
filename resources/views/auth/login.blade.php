@if (count($errors)>0)
  <div class="error">
  @foreach ($errors->all() as $error)
      <p>{!!$error!!}</p>
  @endforeach
  </div>
@endif
{!!Form::open(['route'=>'getLogin'])!!}
{!!Form::token()!!}
{!!Form::label('hoten','Username')!!}
{!!Form::text('user','',array('class'=>'input','placeholder'=>'Nhập họ và tên')) !!}
{!!Form::label('pwd','Mật Khẩu')!!}
{!!Form::password('password',['class'=>'input','placeholder'=>'Nhập mật khẩu']) !!}<br>
{!!Form::submit('Gửi')!!}
{!!Form::close() !!}
