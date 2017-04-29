<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {
  public fuction __construct()
  {
    $this->middleware('guest')
  }

  public funtion index()
  {
    return view('welcome')
    //return 'Hello Madafaka';
  }

  public function contact()
  {
    return view('blade.contact');
    //return 'Hey i just met you, and this is crazy, but here is my numbers, so call me maybe';
  }

}

 ?>
