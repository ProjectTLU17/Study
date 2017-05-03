<?php namespace App\Http\Controllers;
//use...
class PagesController extends Controller {

  public function about(){
    $name = 'Nguyen Duy Hoang Anh';
    return view('blade.about')->with('name',$name);
  }

  public function contact(){
    return view('blade.contact')
  }
}
 ?>
