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
Route::get('homepage',function(){
  return view('homepage');
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
//rename table
Route::get('schema/rename',function(){
  Schema::rename('Duy','Duy2');
});
//drop table
Route::get('schema/drop',function(){
  Schema::dropIfExists('Duy2');
});
//change attributes of table
//loi chua co doctri thif composer.json fix
Route::get('schema/change',function(){
  Schema::table('Duy2',function($table){
    $table->string('tenmonhoc',250)->change();
  });
});
//xoa Col
route::get('schema/drop-col',function(){
  Schema::table('Duy2',function($table){
    $table->dropColumn('ghichu');
    // xóa nhiều cột 1 lúc bằng cách truyền vào 1 mảng theo cấu trúc ['','']
  });
});
Route::get('schema/create/cate',function(){
  Schema::create('category',function($table){
    $table->increments('id');// laravel mặc định chọn khóa chính cho incre
    $table->string('name');
    $table->timestamps();
  });
});
Route::get('schema/create/product',function(){
  Schema::create('product',function($table){
    $table->increments('id');// laravel mặc định chọn khóa chính cho incre
    $table->string('name');
    $table->integer('price');
    $table->integer('cate_id')->unsigned();
    $table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');//tạo khóa ngoại và thêm ondelete để có thể xóa dữ liệu bên khóa chính bất kể khóa chính đã là giá trị khóa ngoại nào khác chưa
    $table->timestamps();
  });
});
Route::get('json', function () {
    return Response::json(array('body' => View::make('blade.layout')->render()));
});
Route::resource('duycon','DuyController',['only'=>'index']);
//Query builder
Route::get('query/select',function(){
  $data=DB::table('product')->get()->toJson();
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});
//query 1 Col cos ddk
Route::get('query/select/name',function(){
  $data=DB::table('product')->select('name')->where('id',1)->get();
  //thêm ->orwhere() là hợp thêm còn và thì thêm ->where
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});
/*Các toán tử query
  ->where('colname',)
  ->orwhere('colname',)
  ->orderBy('colname','DESCorASC')
  ->skip()->take(số phần tử cần lấy)
  ->whereBetween('colname',[startvalue,endvalue])
  ->whereNotBetween('colname',[startvalue,endvalue])
  ->whereIn('colname',[value1,value2,value3,...]) lấy giá trị chính xác
  ->whereNotIn('colname',[value1,value2,value3,...]) lấy giá trị chính xác khác
  ->whereNull('colname') lấy nullable
  ->count() đếm số row trong Table
  ->max('colname')
  ->min('colname')
  ->avg('colname')
  ->sum('colname')
  $product= DB::table('product')->join('category','category.id','=','product.cate_id')->get(); có thể thêm select vào đầu tiên và lưu ý là ko join đc nếu có khóa ngoại
  ->insert()
  ->insertGetId() trả về id  của row vừa insert
  ->where('id',1)->update(['name' => "Áo Gió"]); update theo id
  ->delete(); xóa toàn bộ record của bảng
*/
//Eloquent ORM
Route::get('get/product1',function(){
  $product =App\product::all(); // muốn đổi kiểu dữ liệu trả về thì thêm ->toArray() hoặc ->toJson()

  return Response::json($product);
});
Route::get('get/product',function(App\product $data){
  $product =$data::all()->toArray(); // muốn đổi kiểu dữ liệu trả về thì thêm ->toArray() hoặc ->toJson()
    echo "<pre>";
  print_r($product);
    echo "</pre>";
});
/*
::find(id) lấy dữ liệu theo id
::findorFail(id) nếu ko có thì trả về lỗi
::where('id','>',2)->get();
::where('id','>',2)->firstOrFail()->get(); tìm ít nhất 1 dòng hoặc báo lỗi do ko thấy
::all()->take(2) chỉ lấy 2
::all()->count()
::whereRaw('gia = ? and id = ?', [1000000,2])->get()
cách update dữ liệu là tìm dữ liệu cho vào 1 biến r đè dữ liệu sau đó save
::destroy(id);
->first();
->last();
*/
Route::get('insert/product',function(){
  $product =new App\product;
  $product->name='Quần Công Sở';
  $product->price=120000;
  $product->cate_id=1;
  $product->save();
  echo "bố m xong r nhé";
});
// cách 2
Route::get('create/product',function(){
  $product=array(
    'name'=>'Quần Jean Kaki',
    'price'=>'150000',
    'cate_id'=>'1'
  );
  App\product::create($product);
  echo "bố m xong r nhé";
});
Route::get('hasone',function(){
  $data=App\product::find(2)->category()->get()->toArray();
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});
Route::get('hasmany',function(){
  $data=App\category::find(1)->product()->get()->toArray();
  echo "<pre>";
  print_r($data);
  echo "</pre>";
});
//form
Route::get('form/layout',function(){
  return view('form.layout');
});
//nhận request
Route::post('form/data',['as'=>'sendAcc','uses'=>'DuyController@add']);
//request ko có đẩy về 1 trang bất kì
//Route::any('{all?}',function(){
//  return view('welcome');
//})->where('all','(.*)');
Route::get('Response/basic',function(){
  $arr = array(
        'trungtam'=> 'Khoa Pham Training',
        'monhoc'=> 'Lap Trinh Laravel',
        'giangvien'=> 'Vu Quoc Tuan');
return Response::json($arr);
});
route::get('Response/xml',function(){
  $content='<?xml version="1.0" encoding="utf-8"?>
            <root>
            <trungtam>Khoapham</trungtam>
            <danhsach>
            <monhoc>Lập Trình Laravel</monhoc>
            <monhoc>Lập Trình Swift</monhoc>
            </danhsach>
            </root>
  ';
  $status = 200;
  $value = 'text/xml';
  return Response($content,$status)->header('Content-Type',$value);
});
//return redirect('mess')->with(['level' =>'success','message'=>'Success !!');
//tạo Response download
Route::get('Response/download',function(){
  return Response::download('download/17948319_10203144420166830_1231807931_o.jpg');
  // thêm deleteFileAfterSend(true) thì down xong là xóa
});
//Macro
Route::get('Response/macro/cap',function(){
  return Response()->contact('http://localhost:8000/Response/download');
});
Route::get('authen/login',['as'=>'getLogin','uses'=>'Auth\LoginController@getLogin']);
Route::post('authen/login',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
Route::resource('restful','HocSinhController');
// Javascript ES6
Route::get('es6',function(){
  return view('es6');
});
