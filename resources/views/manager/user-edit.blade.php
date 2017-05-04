{!!Form::open(array('route'=>array('user.update',$user->id),'method'=>'PUT'))!!}
{!!Form::token()!!}
<input type="text" name="name" value="{!!$user->name!!}" class="input-txt" />
<input type="text" name="username" value="{!!$user->username!!}" class="input-txt" />
<input type="text" name="password" value="{!!$user->password!!}" class="input-txt" />
<input type="text" name="role" value="{!!$user->role!!}" class="input-txt" />
<button class="button" type="submit">Cập Nhật</button>
@if (count($errors)>0)
  @foreach ($errors->all() as $element)
     {!!$element!!}
  @endforeach
@endif
{!!Form::close()!!}
