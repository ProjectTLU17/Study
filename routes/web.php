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
  //route for manager
  Route::group(['prefix'=>'manager','middleware'=>'CheckRole'],function(){
    Route::get('statistic',function(){
      return view('template.manager');
	});
    Route::get('',function(){
          return redirect('/dashbroad');;
    });
    //Route statistic
    Route::get('statistic',['as'=>'statistic','uses'=>'StatisticController@index']);
    //end
    Route::resource('user/api','UserRAController');
    Route::resource('product/api','ProductRAController');
    Route::resource('user','UserController');
  });
  //endgroup
  ////////////////////////////////////////////////////////////////////////////
  //route for all role
  Route::group(['prefix'=>'dashbroad'],function(){
    Route::get('',function(){
        return view('template.employee');
    });
    //route restful Controller start
    Route::resource('user','UserController',['only' =>['show']]);
    Route::resource('suplier','SuplierController');
    Route::resource('project','ProjectController');
    Route::resource('product','ProductController');
    Route::resource('land','LandController');
    Route::resource('images','ImagesController');
    Route::resource('customer','CustomerController');
    Route::resource('contract','ContractController');
    Route::resource('category','CategoryController');
    //route restful Controller end
    Route::get('CreateContract/{id}',['as'=>'CreateContract','uses'=>'ContractController@CreateFromProduct']);
  });
  //endgroup
  ////////////////////////////////////////////////////////////////////////////
  Route::get('back',['as'=>'back',function(){
    return redirect()->back();
  }]);
  //logout route
  Route::get('logout',['as'=>'logout',function(){
    Auth::logout();
    return redirect('login');
  }]);
});
//out middleware
//////////////////////////////////////////////////////////////////////////////////
Route::get('',['as'=>'cv',function(){
  return view('template.cv');
}]);
//route login
Route::get('login',['as'=>'login','middleware'=>'AlreadyLogin','uses'=>'Auth\LoginController@getLogin']);
Route::post('login',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
//route redirect any non-define route to login route
Route::any('{all?}',function(){
  return redirect('login');
})->where('all','(.*)');
