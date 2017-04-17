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
    public function testAction(){
      echo "đây là 1 action trong class HomeController";
      return redirect()->route("hcm");
    }
}
