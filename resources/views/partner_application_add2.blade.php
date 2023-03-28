<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <title>Partner Business Information</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"> </script>
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/rider_application2.css">
  </head>
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <h3 class="header_title pt-2 pt-md-3">Partner Application</h3>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
           <a href="" data-bs-toggle="modal" data-bs-target="#ExitModal" class="nav_logo">
              <i class="bx bx-log-out nav_icon text-white"></i>
              <span class="nav_logo-name">Back to Website</span>
          </a>
            <div class="nav_list logos">
              <div class="title d-flex pb-3 ps-2 gap-2 align-items-center">
              <img src="image/foodea.png" style="width: 50px">FOODEA
            </div>
            <div class="nav_link active mt-3 py-3 ms-2">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Term User</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">1</span>
              <span class="nav_name">Personal Information</span>
            </div>
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">2</span>
              <span class="nav_name">Business Information</span>
            </div>
            <!-- <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Vehicle Information</span>
            </div> -->
            <!-- <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">5</span> 
              <span class="nav_name">Application Status</span>
            </div> -->
          </div>
        </div>
        </div>
      </nav>
    </div>
    <!-- Content Here -->
    <!-- Form -->


     
  <!-- EXIT Modal -->
        <div class="modal fade" id="ExitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Exit Signup</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('ExitSignup') }}">
              <div class="modal-body">
                Are you sure to discard your application?
              </div>
              <div class="modal-footer">
                <button type="button" class="white-btn" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="red-btn">Confirm</button>
                </form>
              </div>
            </div>
          </div>
        </div>

    <!-- End Content Here -->


    <!-- <div class="container sign-form"> -->
      <div class="content-wrapper container mt-2 px-3 py-2">
        <div class="col-12 col-sm-12 col-md-9 col-lg-7 justify-content-center align-items-center mx-auto px-0">

          <div class="right">
            <h2>Menu</h2>
          <div class="d-flex justify-content-center">
            <p>2 out of 5 Menu</p>
          </div>

              <!--GET PARTNER ID-->

            <form method="post" action="{{ route('addproductpartner2')}}" enctype="multipart/form-data">
          @csrf
              @if (Session::has('merchant_id'))
              <input type="text" name="merchant_id" value=" {{ Session::get('merchant_id') }}">
          @endif

          <input type="text" name="merchant_id" value=" {{ Session::get('merchant_id') }}">

            <div class="form-group">
              <label>Product Name</label>
              <input type="text" name="product_name" class="form-control form-control-lg" required/>
              <span
                style="color:red;">
                  @error('business_name')
                    {{ $message }}
                  @enderror
              </span>
            </div>

            <div class="form-group">
              <label>Category</label>
              <select name="category" id="category" class="form-control form-control-lg" required>
                <option>New Product</option>
                {{-- <option>Sole proprietorship</option>
                <option>Corporation</option> --}}
              </select>
              <span style="color:red;">
                @error('business_type') 
                  {{ $message }}
                @enderror
              </span>
            </div>
            

            <div class="form-group">
              <label>Tags</label>
              <input type="text" class="form-control" id="tags_category" name="tags_category" value="" data-role="tagsinput" name="tags_category" required>
              <span style="color:red;">
                @error('address')
                  {{ $message }}
                @enderror
              </span>
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            <span
              style="color:red;">
              @error('description') {{ $message }}
              @enderror</span>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Ingredients</label>
              <textarea name="ingredients" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
              <span style="color:red;">
                @error('ingredients')
                  {{ $message }}
                @enderror
              </span>
            </div>
            
              {{-- <div class="form-group">
            <label for="exampleFormControlTextarea1">Menu Photo</label>
            <div class="requirements row">
          <input type="file" name="logo">
          <span>File size up to 5mb only</span>
            <span
              style="color:red;">
              @error('vision') {{ $message }}
              @enderror</span>
              </div>
            </div> --}}

            <div class="form-group">
              <div class="requirements row">
                <input type="file" value="{{ old('product_image') }}" name="product_image" required/>
                <span style="color:red;">
                    @error('product_image')
                      {{ $message }}
                    @enderror
                </span>
              </div>
            </div>


            <div class="form-group">
              <label>Price</label> 
                <input type="number" name="price" class="form-control form-control-lg" required/>
                <span style="color:red;">
                  @error('city')
                    {{ $message }}
                  @enderror
                </span>
            </div>

            <div class="form-group">
              <label>Stock</label>
                <input type="number" name="stock" class="form-control form-control-lg" required/>
                <span style="color:red;">
                  @error('barangay')
                    {{ $message }}
                  @enderror</span>
            </div>

            <div class="form-group">
              <label>Status</label>
                <select name="status" id="" class="form-control form-control-lg" required>
                  <option>Enable</option>
                  <option>Disable</option> 
                </select>
                <span style="color:red;">
                  @error('business_type')
                    {{ $message }}
                  @enderror</span>
            </div>

            
            <br>
            <br>
            <div class="form-group">
              <div class="col-sm-12 d-flex justify-content-center">
                <button Value="submit" type="submit" class="btn btn-danger w-50">Next</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
  <!-- </div> -->



      </div>
      </div>
    
    <!-- Show Hide Password -->
 
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/verification.js') }}"></script>
    <script src = "js/sidebar.js"></script>
  </body>
</html>
