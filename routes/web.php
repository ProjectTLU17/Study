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
Route::group(['middleware'=>'auth'],function(){
  //route cho manager
  Route::group(['prefix'=>'manager','middleware'=>'CheckRole'],function(){
    Route::get('',function(){
          return view('template.manager');
    });
    Route::resource('user/api','UserRAController');
    Route::resource('user','UserController');
  });
  //route cho tất cả
  Route::group(['prefix'=>'dashbroad'],function(){
    Route::get('',function(App\Product $data){
        $product=$data::select('id','details','images')->get();
        return view('template.employee',compact('product'));
    });
    Route::resource('user','UserController',['only' =>['show','edit','update']]);
    Route::resource('customer','CustomerController');
    Route::resource('suplier','SuplierController');
    Route::resource('category','CategoryController');
    Route::resource('contract','ContractController');
    Route::resource('product','ProductController');

  });
  //endgroup
  Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
  });
});
Route::get('login',['as'=>'login','middleware'=>'AlreadyLogin','uses'=>'Auth\LoginController@getLogin']);
Route::post('login',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
Route::any('{all?}',function(){
  return redirect('login');
})->where('all','(.*)');
