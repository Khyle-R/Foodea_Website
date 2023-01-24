<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FOODEA</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
   
    <div class="container-fluid ">
        <div class="row justify-content-center">
        <div class="col-auto col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <form method="post" action="{{ route('login.LoginMerchant') }}" class="form-container">
            @csrf
          <div class="title">
            <a href="/">
            <img src="image/foodea1.png" alt="" /> </a>
            <h2>FOODEA</h2>
          </div>

          <div class="form-group">
          @if (Session::has('fail'))
            <div class="alert"><p>{{ Session::get('fail') }}</p></div>
            
          @endif
    
            <label for="email">Email</label>
            <input type="email" name="email" />
             <span
            class="error">
            @error('email') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" />
               <span
             class="error">
            @error('password') {{ $message }}
            @enderror</span>
          </div>

            <a href="#">Forgot your Password?</a>
            <button type="submit" class="login">LOG IN</button>

            <div class="bottom">
              <p>Don't have an account?</p>
              <a href="#">Sign Up</a>
            </div>
         
            {{-- <h3>OR</h3>
            <button class="sign">Sign up with Google</button> --}}
        </form> 
      </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
