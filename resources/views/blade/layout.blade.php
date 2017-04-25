@extends('blade.master')
@section('title','layout')
@section('noidung')
Đây là trang layout
@for($i=0;$i<=10;$i++)
  Số thứ tự:{{$i}}<br>
@endfor
<?php $i=0; ?>
@while ($i<=10)
  Số thứ tự:{{$i}}<br>
  <?php $i++; ?>
@endwhile
<br>
<?php $array=['com','chao','pho']; ?>
@foreach ($array as $item)
  {{$item}},
@endforeach
@stop
