<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    public function getLogin(){
      return view('auth.login');
    }
    public function postLogin(UserRequest $request){}
}
