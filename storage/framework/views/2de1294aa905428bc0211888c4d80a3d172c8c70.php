<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Partner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login_partner.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-8 col-sm-6 col-md-3">
            <form class="form-container">
                <div class="title">
                <img src="image/foodea3.png" alt="" />
                <h2>FOODEA</h2>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password">
                    <span class="eye" onclick="myFunction()">
                    <i class="fa fa-eye" id="hide1"></i>
                    <i class="fa fa-eye-slash" id="hide2"></i>
                    </span>
                </div>
                <button class="login" type="login-btn">LOG IN</button>
              </form>
        </div>
      </div> 
    </div>


           <script>
              function myFunction(){
                var a = document.getElementById("password");
                var b = document.getElementById("hide1");
                var c = document.getElementById("hide2");

                if(a.type == 'password'){
                  a.type = "text";
                  b.style.display = "block";
                  c.style.display = "none";
                }
                else{
                  a.type = "password";
                  b.style.display = "none";
                  c.style.display = "block";
                }
              }
           </script>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/login_partner.blade.php ENDPATH**/ ?>