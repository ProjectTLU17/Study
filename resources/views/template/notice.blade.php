<div class="alert text-center">
  @foreach ($errors->all() as $error)
    <p style="color:red">{!!$error!!}</p>
  @endforeach
  <div class="flash-message">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
    @endif
  @endforeach
  </div> <!-- end .flash-message -->
</div>
