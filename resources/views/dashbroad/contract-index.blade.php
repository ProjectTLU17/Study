@extends('template.menubar-employee')
@section('title','Quản lý hợp đồng')
@section('main')
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#contract-index">Danh sách tất cả hợp đồng</a></li>
    <li><a data-toggle="tab" href="#contract-buyrent">Hợp đồng mua thuê</a></li>
    <li><a data-toggle="tab" href="#contract-sell">Hợp đồng bán</a></li>
    <li><a data-toggle="tab" href="#contract-restore">Hợp đồng thu hồi</a></li>
    <li><a type="button" class="btn btn-info" href="{!!route('contract.create')!!}">Thêm mới</a>  </li>
  </ul>

  <div class="tab-content" style="padding-top:50px;">
    <div id="contract-index" class="tab-pane fade in active" style="overflow:scroll;">
      <table class="table">
        <thead>
          <tr>
            <th style="text-align:center;">STT</th>
            <th style="text-align:center;">Mã hợp đồng</th>
            <th style="text-align:center;">Loại hợp đồng</th>
            <th style="text-align:center;">Tên hợp đồng</th>
            <th style="text-align:center;">Nhân viên làm hợp đồng</th>
            <th style="text-align:center;">Mô Tả</th>
            <th style="text-align:center;">Trạng thái</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
              $stt=0;
            @endphp
            @foreach ($contract as $item)
            @php
              $stt++;
            @endphp
            <th style="text-align:center;" scope="row"><h6>{{$stt}}</h6></th>
            <th style="text-align:center;"><h6>{!!$item->id!!}</h6></th>
            <th></th>
            <th></th>
            <th style="text-align:center;"><h6></h6></th>
            <th style="text-align:center;"><h6>{!!$item->decription!!}</h6></th>
            <th style="text-align:center;"><h6>{!!$item->status!!}</h6></th>
            <th>
              {!!Form::open(array('route'=>array('contract.destroy',$item->id),'method'=>'DELETE'))!!}
                <button class="btn-link " onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit">Xóa</button>
              {!!Form::close()!!}
            </th>
            <th>
              <a class="btn-link" style="color:black;"  href="{!!route('land.edit',$item->id)!!}">Chi Tiết</a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div id="contract-buyrent" class="tab-pane fade in">
    </div>
    <div id="contract-sell" class="tab-pane fade in">
    </div>
    <div id="contract-restore" class="tab-pane fade in">
    </div>
  </div>
@stop
