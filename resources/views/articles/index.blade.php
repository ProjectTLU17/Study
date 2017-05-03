@extends('app')

@section('content')
  <h1>Hello WW2</h1>
  @foreach ($articles as $article)
    <articles>
      <h2>{{ $articles -> title }}</h2>
      <div class="body">
        {{ $articles -> body }}
      </div>
    </articles>
  @endforeach
@stop
