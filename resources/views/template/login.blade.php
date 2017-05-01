<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="shortcut icon" href="/img/favicon.png" />
  </head>
  <body>
    <div class="container">
    <div class="login">
    	<h1 class="login-heading">
        <strong>Welcome.</strong> Please login.</h1>
        <div class="errors">
          {{$errors->first('username')}}
          {{$errors->first('password')}}
        </div>
          {!!Form::open(['route'=>'login'])!!}
          {!!Form::token()!!}
          <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
            <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
            <div class="login-footer">
               <a href="#" class="lnk">
                <span class="icon icon--min">ಠ╭╮ಠ</span>
                I've forgotten something</a>
              <button type="submit" class="btn btn--right">Sign in  </button>
            </div>
	        {!!Form::close() !!}
    </div>
  </div>
  </body>
</html>
