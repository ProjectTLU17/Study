<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //test Controller
    public function test(){
      echo "đây là test controllers ";
    }
    public function testview(){
      return view('test');
    }
}
