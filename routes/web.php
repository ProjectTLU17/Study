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
Route::get('employee',function(){
  return view('template.employee');
});
Route::get('manager',function(){
  return view('template.manager');
});
Route::get('/',function(){
  return view('template.login');
});
