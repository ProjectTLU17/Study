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
    /*public function checkstring(){
      $string='a>';
      echo $string ;
      echo "<br>";
      $check=true;
      $var=Null;
      for ($i=0; $i < strlen($string)-1; $i++) {
        if ($string[$i]=='&'||$string[$i]=='|'||$string[$i]=='('||$string[$i]==')'||$string[$i]=='>') {
          if ($i==(strlen($string)-1)) {
            $check=false;
            break;
          }else ($string[$i+1]=='&'||$string[$i+1]=='|'||$string[$i+1]=='('||$string[$i+1]==')'||$string[$i+1]=='>') {
            $check=false;
            break;
          }
        }
      }
      if ($check) {
        echo 'đúng cmnr';
      }
      else {
        echo 'sai cmnr';
      }
    }
    */
}
