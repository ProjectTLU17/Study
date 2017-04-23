<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test',function(){
  echo "được phết này";
});
Route::get('test2','HomeController@testview');
Route::get('thong-tin/{hoten}/{sdt}', function($hoten,$sdt){
  return "Thông tin của bạn là: $hoten với số điện thoại là: $sdt ";
})->where(['sdt' => '[0-9]{10,11}', 'hoten' => '[a-zA-Z]+']);
Route::get('show-view',function(){
  $ten= "duy";
  $view='Admin';
  return view('test',compact('ten','view'));
});
Route::get('test-controller','HomeController@testAction');
Route::get('ho-chi-minh',['as'=>'hcm',function(){
  return "Hồ Chí Minh đẹp lắm các bạn ơi";
}]);
// group routes
route::group(['prefix'=>'mon-an'],function(){
  route::get('bun-bo',function(){
    echo "Đây là trang bán bún bò";
  });
  route::get('bun-mam',function(){
    echo "Đây là trang bán bún mắm";
  });
  route::get('bun-moc',function(){
    echo "Đây là trang bán bún mọc";
  });
});
//views
Route::get('goi-view',function(){
  return view('sub.sub2.test2');
});
Route::get('goi-layout',function(){
  return view('sub.sub2.layout');
});
View::share('title',['Lập Trình Laravel 5x','2']);
view::composer(['sub.sub2.layout','sub.sub2.test2'],function($view){
  return $view->with('thongtin','đây là trang cá nhân');
});
Route::get('check-view',function(){
  if(view()->exists('test')){
    return "Toonf taij";
  }
  else{
    return "khong";
  }
});
Route::get('goi-master',function(){
  return view('blade.layout');
});
Route::get('goi-master2',function(){
  return view('blade.sub');
});
Route::get('url/asset',function(){
  return asset('css/mystyle.css');
});

Route::get('full',function(){
  return URL::full();
});
Route::get('url/to',function(){
  return URL::to('thong-tin',['quoctuan','01649372037'],true);
});
Route::get('url/secure',function(){
  return secure_url('thong-tin',['quoctuan','01649372037']);
});
//thêm true hoặc dùng secure_url để trả về https
//tạo bảng mysql qua laravel check connect đc sql bằng lệnh php artisan migrate
Route::get('schema/create',function(){
  Schema::create('Duy',function($table){
    $table->increments('id');// laravel mặc định chọn khóa chính cho incre
    $table->string('tenmonhoc');
    $table->integer('gia');
    $table->text('ghichu')->nullable();
    $table->timestamps();
  });
});
