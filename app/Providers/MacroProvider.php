<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Response;
class MacroProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('cap',function($str){
          return Response::make(strtoupper($str));
        });
        Response::macro('contact',function($action){
          $contact='
                    <form action="'.$action.'" mothod ="POST" >
                      Họ tên <input type="text"/>
                      SĐT <input type="text"/>
                    </form>
          ';
          return $contact;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
