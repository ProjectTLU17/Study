@extends('template.menubar-employee')
@section('title','Trang chủ của người quản lý')
@section('main')
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header text-right">Thống kê dữ liệu</h1>
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#d1d1d1;">
          <div class="row">
            <div class="col-xs-4">
              <img src="{{asset('images/all.png')}}" style="width:100%;">
            </div>
            <div class="col-xs-8 text-right">
              <div>Tổng số sản phẩm trong hệ thống</div>
                <h1>{!!$totalproduct!!}</h1>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#d1d1d1;">
            <div class="row">
              <div class="col-xs-4">
                <img src="{{asset('images/available.png')}}" style="width:100%;">
              </div>
              <div class="col-xs-8 text-right">
                <div>Số sản phẩm đang có</div>
                  <h1>{!!$availproduct!!}</h1>
              </div>
            </div>
          </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6">
          <div class="panel panel-default">
              <div class="panel-heading" style="background-color:#d1d1d1;">
                  <div class="row">
                      <div class="col-xs-4">
                        <img src="{{asset('images/rent.png')}}" style="width:100%;">
                      </div>
                      <div class="col-xs-8 text-right">
                        <div>Số sản phẩm đang cho thuê</div>
                          <h1>{!!$rentproduct!!}</h1>
                      </div>
                  </div>
              </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#d1d1d1;">
                            <div class="row">
                                <div class="col-xs-4">
                                  <img src="{{asset('images/sold.png')}}" style="width:100%;">
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div>Số sản phẩm đã được bán</div>
                                    <h1>{!!$soldproduct!!}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Biểu đồ doanh thu</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

              <div class="row">
                <!--biểu đồ tròn -->
                  <div class="col-lg-4">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Biểu đồ tỉ lệ sản phẩm</h3>
                          </div>
                          <div class="panel-body">
                              <div id="morris-donut-chart"></div>
                          </div>
                      </div>
                  </div>
                  <!-- hết biểu đồ tròn -->
                  <div class="col-lg-8">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Bảng Trạng Thái</h3>
                          </div>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered table-hover table-striped">
                                      <thead>
                                          <tr>
                                              <th>Mã Hợp đồng</th>
                                              <th>Tên Hợp Đồng</th>
                                              <th>Giá Trị</th>
                                              <th>Trạng thái</th>
                                              <th>Chi tiết</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($contract as $element)
                                          <tr>
                                              <td>{!!$element->id!!}</td>
                                              <td>{!!$element->name!!}</td>
                                              @if ($element->type=='sell')
                                                  <td>{!!$element->product->price!!}</td>
                                                @else
                                                  <td>{!!$element->product->price*30/100!!}</td>
                                              @endif
                                              <td>{!!$element->status!!}</td>
                                              <td><a href="{!!route('contract.edit',$element->id)!!}">Duyệt</a></td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.row -->
          </div>

  <!-- jQuery -->
  <script src="{{asset('js/jquery.js')}}"></script>

  <!-- gzris Charts JavaScript -->
  <script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
  <script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
  <script type="text/javascript">
      $(function() {
      Morris.Donut({
          element: 'morris-donut-chart',
          data: [{
              label: "Available Product",
              value: "{!!$availproduct!!}"
          }, {
              label: "Sold Product",
              value: "{!!$soldproduct!!}"
          }, {
              label: "Rent Product",
              value: "{!!$rentproduct!!}"
          },{
              label: "Pending Product",
              value: "{!!$pendingproduct!!}"
            }
          ],
          resize: true
      });
      Morris.Bar({
          element: 'morris-bar-chart',
          data: [{
              category:'Biệt thự',
              value1: "{!!$valuesold[0]!!}",
              value2: "{!!$valuerent[0]!!}"
          }, {
              category: 'Căn hộ',
              value1: "{!!$valuesold[1]!!}",
              value2: "{!!$valuerent[1]!!}"
          },{
              category: 'Villa',
              value1: "{!!$valuesold[2]!!}",
              value2: "{!!$valuerent[2]!!}"
          },{
              category: 'Mảnh Đất',
              value1: "{!!$valuesold[3]!!}",
              value2: "{!!$valuerent[3]!!}"
          }],
          xkey: 'category',
          ykeys: ['value1','value2'],
          labels: ['Bán','Cho Thuê'],
          barRatio: 0.4,
          xLabelAngle: 35,
          hideHover: 'auto',
          resize: true
      });
    });
  </script>
@stop
