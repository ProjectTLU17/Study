@extends('app')

@section('content')

@if ($name =='NguyenDuyHoangAnh')
  <h1>Em chao a HA dep trai</h1>
@else
  <h1>cutttt</h1>
@endif
<body>
<h1>About me: <?= $name;?></h1>
</body>
</html>
