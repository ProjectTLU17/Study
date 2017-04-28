@extend('app')

@section('content')
<h1>Write a New Article</h1>

  <form>
    {!! Form::open(['url'=>'articles']) !!}
    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <!--Body form input -->
    <div class="form-group">
      {!! Form::label('body', 'Body:') !!}
      {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <!--ngay thang nam-->
    <div class="form-group">
      {!! Form::label('published_at', 'Publish On:') !!}
      {!! Form::input('date', 'published_at',null, ['class' => 'form-control']) !!}
    </div>

    <!-- submit -->
    <div class="form-group">
      {!! Form::submit('Add Article', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
  </form>
@stop
