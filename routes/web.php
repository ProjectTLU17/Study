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
  Route::group(['prefix'=>'manager','middleware'=>'CheckRole'],function(){
    //route cho manager
    Route::get('',function(){
          return view('template.manager');
    });
    Route::resource('users/api','UsersRAController');
    Route::resource('users','UsersController');
  });
  Route::group(['prefix'=>'employee'],function(){
    //route cho nhân viên
    Route::get('',function(){
        return view('template.employee');
    });
  });
});
Route::get('/',function(){
    return redirect('login');
});
Route::get('login',['as'=>'getLogin','uses'=>'Auth\LoginController@getLogin']);
Route::post('login',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
Route::get('logout',function(){
  Auth::logout();
  return redirect('login');
});
