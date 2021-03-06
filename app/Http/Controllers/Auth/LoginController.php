<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function getLogin(){
      return view('template.login');
    }
    public function postLogin(LoginRequest $request){
      $authe=['username'=>$request->username,
              'password'=>$request->password];
      if (Auth::attempt($authe)) {
          return redirect('manager');
        }
      else {
        return redirect('login')->withErrors(['passwrong' => 'Sai tên tài khoản hoặc mật khẩu']);
      }
    }
    public function postLogout(){
      Auth::logout();
    }
  }
