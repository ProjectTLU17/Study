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
    Route::resource('users/api','UsersRAController',['except' =>'create']);
    Route::resource('users','UsersController');
  });
  //route cho nhân viên
  Route::group(['prefix'=>'dashbroad'],function(){
    Route::get('',function(){
        return view('template.employee');
    });
    Route::resource('customers','CustomersController');
    Route::resource('supliers','SupliersController');
  });
  //endgroup
  Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
  });
});
Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('login',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
Event::listen('login', function (){
    if(Auth::check()){
        return redirect('manager');
    }
});
Route::any('{all?}',function(){
  return redirect('login');
})->where('all','(.*)');
