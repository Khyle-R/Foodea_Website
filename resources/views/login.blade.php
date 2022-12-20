<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FOODEA</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
  </head>

  <body>
    <div class="corner">
      <img src="image/logo.png" alt="" />
    </div>
    <div class="container">
      <div class="content">
        <form method="post" action="{{ route('login.LoginMerchant') }}">
            @csrf
          <div class="title">
            <a href="/">
            <img src="image/foodea1.png" alt="" /> </a>
            <h2>FOODEA</h2>
           
          </div>
          <div class="input">
          @if (Session::has('fail'))
            <div class="alert"><p>{{ Session::get('fail') }}</p></div>
            
          @endif
    

            <label for="email">Email</label>
            <input type="email" name="email" />
             <span
            style="color:red;">
            @error('email') {{ $message }}
            @enderror</span>

            <label for="password">Password</label>
            <input type="password" name="password" />
               <span
            style="color:red;">
            @error('password') {{ $message }}
            @enderror</span>
            <a href="#">Forgot your Password?</a>
            <button type="submit" class="login">LOG IN</button>
       
            {{-- <h3>OR</h3>
            <button class="sign">Sign up with Google</button> --}}
          </div>
          <div class="bottom">
            <p>Don't have an account?</p>
            <a href="#">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
