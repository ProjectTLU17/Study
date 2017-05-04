{!!Form::open(array('route'=>array('user.update',$user->id),'method'=>'PUT'))!!}
{!!Form::token()!!}
<input type="text" name="name" value="{!!$user->name!!}" required="required" class="input-txt" />
<button class="button" type="submit">Cập Nhật</button>
{!!Form::close()!!}
