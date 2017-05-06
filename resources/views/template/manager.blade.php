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
              <img src="images/all.png" style="width:100%;">
            </div>
            <div class="col-xs-8 text-right">
                <h1>26</h1>
                <div>Tổng số sản phẩm có</div>
            </div>
          </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">Xem chi tiết</span>
                <span class="pull-right"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#d1d1d1;">
            <div class="row">
              <div class="col-xs-4">
                <img src="images/available.png" style="width:100%;">
              </div>
              <div class="col-xs-8 text-right">
                  <h1>12</h1>
                  <div>Số sản phẩm đang có</div>
              </div>
            </div>
          </div>
              <a href="#">
                  <div class="panel-footer">
                      <span class="pull-left">Xem chi tiết</span>
                      <span class="pull-right"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
      </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#d1d1d1;">
                            <div class="row">
                                <div class="col-xs-4">
                                  <img src="images/rent.png" style="width:100%;">
                                </div>
                                <div class="col-xs-8 text-right">
                                    <h1>124</h1>
                                    <div>Số sản phẩm đã thuê</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#d1d1d1;">
                            <div class="row">
                                <div class="col-xs-4">
                                  <img src="images/sold.png" style="width:100%;">
                                </div>
                                <div class="col-xs-8 text-right">
                                    <h1>13</h1>
                                    <div>Số sản phẩm đã được bán</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
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
                            <div id="morris-area-chart"></div>
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
                              <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Biểu đồ bịa ra</h3>
                          </div>
                          <div class="panel-body">
                              <div id="morris-donut-chart"></div>
                              <div class="text-right">
                                  <a href="#">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- hết biểu đồ tròn -->
                  <div class="col-lg-4">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Bảng công việc</h3>
                          </div>
                          <div class="panel-body">
                              <div class="list-group">
                                  <a href="#" class="list-group-item">
                                      <span class="badge">just now</span>
                                      <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge">4 minutes ago</span>
                                      <i class="fa fa-fw fa-comment"></i> Commented on a post
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge">23 minutes ago</span>
                                      <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge">46 minutes ago</span>
                                      <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge">1 hour ago</span>
                                      <i class="fa fa-fw fa-user"></i> A new user has been added
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge">2 hours ago</span>
                                      <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge">yesterday</span>
                                      <i class="fa fa-fw fa-globe"></i> Saved the world
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge">two days ago</span>
                                      <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                  </a>
                              </div>
                              <div class="text-right">
                                  <a href="#">Xem tất cả <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Bảng giao dịch</h3>
                          </div>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered table-hover table-striped">
                                      <thead>
                                          <tr>
                                              <th>Order #</th>
                                              <th>Order Date</th>
                                              <th>Order Time</th>
                                              <th>Amount (USD)</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>3326</td>
                                              <td>10/21/2013</td>
                                              <td>3:29 PM</td>
                                              <td>$321.33</td>
                                          </tr>
                                          <tr>
                                              <td>3325</td>
                                              <td>10/21/2013</td>
                                              <td>3:20 PM</td>
                                              <td>$234.34</td>
                                          </tr>
                                          <tr>
                                              <td>3324</td>
                                              <td>10/21/2013</td>
                                              <td>3:03 PM</td>
                                              <td>$724.17</td>
                                          </tr>
                                          <tr>
                                              <td>3323</td>
                                              <td>10/21/2013</td>
                                              <td>3:00 PM</td>
                                              <td>$23.71</td>
                                          </tr>
                                          <tr>
                                              <td>3322</td>
                                              <td>10/21/2013</td>
                                              <td>2:49 PM</td>
                                              <td>$8345.23</td>
                                          </tr>
                                          <tr>
                                              <td>3321</td>
                                              <td>10/21/2013</td>
                                              <td>2:23 PM</td>
                                              <td>$245.12</td>
                                          </tr>
                                          <tr>
                                              <td>3320</td>
                                              <td>10/21/2013</td>
                                              <td>2:15 PM</td>
                                              <td>$5663.54</td>
                                          </tr>
                                          <tr>
                                              <td>3319</td>
                                              <td>10/21/2013</td>
                                              <td>2:13 PM</td>
                                              <td>$943.45</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <div class="text-right">
                                  <a href="#">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.row -->
          </div>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- gzris Charts JavaScript -->
  <script src="js/plugins/morris/raphael.min.js"></script>
  <script src="js/plugins/morris/morris.min.js"></script>
  <script src="js/plugins/morris/morris-data.js"></script>
@stop
