@extends('blade.master')
@section('title','sub')
@section('sidebar')
  @parent
  Nằm ở sau
@stop
@section('noidung')
Đây là trang sub
<br/>
<?php
$hoten='<b>Duy studying</b>';
echo $hoten;
?>
<!cách khác>
{{$hoten}}
{!!$hoten!!}
<?php $diem=10; ?>
@if($diem<=5)
  Học sinh yếu
@elseif($diem>=5&&$diem<=7)
  Học Sinh trung bình
@else
  Học Sinh Giỏi
@endif
{{isset($diem)?$diem:'Không có điểm'}}
{{$diemm or 'không tồn tại biến diemm'}}
@stop
