@extends('admin.index')
@section('content')

<div class="content-wrapper">
    <div class="row">
 <!---ALERT BOX --->
                    @if (Session::has('success'))
                    <p style="display:none" class="popup"></p>
            <div class="success hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">{{ Session::pull('success') }}</span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    @endif
              @if (Session::has('fail'))
                    <p style="display:none" class="failed"></p>
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">{{ Session::pull('fail') }}</span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    @endif
              <!---/ALERT BOX --->
    </div>

    <div class="page-header">
        <h3 class="page-title black">Add Account</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Menu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                   Add Account
                </li>
           
            </ol>
        </nav>
    </div>
   
             <div class="tab-content">
              
                <!-- Profile Info Tab -->
                <div id="emp_profile" class="pro-overview tab-pane fade show active">
                  
                  <div class="row">
                    
                        <div class="col-md-12 d-flex">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                               
        <div class="col-12 col-sm-12 col-md-9 col-lg-7 justify-content-start align-items-center mx-auto px-0">
           <div class="right">
            <div class="right">
            <h2>Create Account</h2>
            <h3>Please fill up the form below.</h3>
           <form method="post" action="{{route('AddNewAccount')}}">
           @csrf
           
             <div class="form-group mt-5">
            <label >Email Address <a style="color:#BD9140;font-size: 13px;">(For Email verification)</a></label>
            <input name="email" type="text" value="{{ old('email') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('email') {{ $message }}
            @enderror</span>
            </div>

             <div class="form-group">
            <label>Password<a style="color:#BD9140;font-size: 13px;"> (Must be at least 8 characters long. 
              Password must contain letters, numbers and symbols.)</a></label>
              <input type="password" id="password" name="password" class="form-control form-control-lg">
              <span class="eye mx-2" onclick="myFunction()">
                <i class="fa fa-eye" id="hide1"></i>
                <i class="fa fa-eye-slash" id="hide2"></i>
              </span>
              
             <span
            style="color:red;">
            @error('password') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Confirm Password</label>
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg">
              <span class="eye2 mx-2" onclick="Function()">
                <i class="fa fa-eye" id="hide3"></i>
                <i class="fa fa-eye-slash" id="hide4"></i>
              </span>
             <span
            style="color:red;">
            @error('password_confirmation') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Role</label>
            <select name="role" id="" class="form-control-lg custom-select">
              <option selected="true" disabled="disabled">- Select -</option>
              <option value="Inventory Officer" @if(old('role') == 'Inventory Officer') selected="selected" @endif>Inventory Officer</option>
              <option value="Sales Officer" @if(old('role') == 'Sales Officer') selected="selected" @endif>Sales Officer</option>
            </select>
             <span
            style="color:red;">
            @error('role') {{ $message }}
            @enderror</span>
            </div>

             <div class="form-group">
            <label>Status</label>
            <select name="status" id="" class="form-control-lg custom-select">
              <option selected="true" disabled="disabled">- Select -</option>
              <option value="Active" @if(old('status') == 'Active') selected="selected" @endif>Active</option>
              <option value="Inactive" @if(old('status') == 'Inactive') selected="selected" @endif>Inactive</option>
            </select>
             <span
            style="color:red;">
            @error('status') {{ $message }}
            @enderror</span>
            </div>
    
            <br>
           
           <br>
           <div class="form-group">
            <div class="col-sm-12 d-flex justify-content-center">
              <button Value="submit" type="submit" class="btn btn-danger w-50 py-2">Create account</button>
            </div>
           </div>
            </form>
          </div>
        </div>
      
                                   </div>
    
                                </div>
                          
                            </div>
                        </div>
                    </div>
                </div>
                
             </div>
</div>


 <!-- Show Hide Password -->
    <script>
        function myFunction(){
          var a = document.getElementById("password");
          var b = document.getElementById("hide1");
          var c = document.getElementById("hide2");
    
          if(a.type == 'password'){
            a.type = "text";
            b.style.display = "inline";
            c.style.display = "none";
          }
          else{
            a.type = "password";
            b.style.display = "none";
            c.style.display = "inline";
          }
        }
    </script>
    <!-- Show Hide Confirm Password -->
    <script>
      function Function(){
        var x = document.getElementById("password_confirmation");
        var y = document.getElementById("hide3");
        var z = document.getElementById("hide4");

        if(x.type == 'password'){
          x.type = "text";
          y.style.display = "inline";
          z.style.display = "none";
        }
        else{
          x.type = "password";
          y.style.display = "none";
          z.style.display = "inline";
        }
      }
    </script>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022. All Rights Reserved</span>
       
    </div>
</footer>
<!-- partial -->
</div>

@endsection