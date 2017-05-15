<?php
//Route::get('/','WelcomeController@index');
Route::get('contact','WelcomeController@contact')
Route::get('home','HomeController@index');
Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');
Route::get('articles','ArticlesController@index');
Route::get('articles/{id}','ArticlesController@show');
Route::get('articles/create','ArticlesController@create');
Route::controller([
  'auth'=>'Auth\AuthController',
  'password'=>'Auth\PasswordController'
])
 ?>