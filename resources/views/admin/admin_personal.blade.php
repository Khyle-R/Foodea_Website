@extends('admin.index')
@section('content')
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img
                          src="assets/images/dashboard/Group126@2x.png"
                          class="gradient-corona-img img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="black mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">
                          Your account has limited access, please complete the documents needed so you can access all features.
                        </p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a
                            
                            class="btn btn-warning btn-rounded get-started-btn"
                            >Upload documents</a
                          >
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <button type="button" class="btn btn-link btn-fw  font-weight-normal text-white">Information</button>
                          
                        </span>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <button type="button" class="btn btn-link btn-fw  font-weight-normal text-white">Documents</button>
                          
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
  

            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="list-group list-group-flush border-bottom scrollarea">
                
                      <div class="text-center" style="padding-bottom: 80px;">
                      <img class="img-lg rounded-circle" src="assets/images/faces/face23.jpg" alt="">
                       <h6 class="text-dark font-weight-bolder " style="padding-top:10px;">FOODEA</h6> 
                      </div>
                        
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <h6 class="mb-1">Overview </h6>
                    
                  </div>
                  </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <h6 class="mb-1">Change Password</h6>
                    
                  </div>
               </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <h6 class="mb-1">Settings</h6>
                    
                  </div>
               </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <h6 class="mb-1">Security</h6>
                  </div>    
                </a>     
              </div>
              <div class="mt-5" style="padding-left: 60px;">
                <button type="button" class="btn btn-outline-warning btn-lg btn-rounded ">Waiting for Approval</button>
              </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  
                     <div class="card-header">
                      
                      <a class="btn btn-link text-decoration-none get-started-btn " href="/account" style="font-size: 15px;" >Profile Information</a>
                        
                      
                  
                        
                        <a class="btn btn-link text-decoration-none get-started-btn " style="font-size: 15px;">Business Information</a>
                    
                    <a class="btn btn-warning btn-rounded get-started-btn" style="margin-left: 250px;">Edit Profile</a>
                    </div>
                    <div class="card-body">
                    <form class="form-sample">
                      <p class="card-description">   </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" >First Name</p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" >Contact Phone</p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" >Middle Name</p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" >Email Address</p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" >Last Name</p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" >Facebook URL</p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" >Address &nbsp &nbsp &nbsp</p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <p class="text-dark" > Twitter URL </p>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" style="border-radius: 10px;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <p class="text-dark" >About us</p>
                        <textarea class="form-control" id="exampleTextarea1" rows="10" style="border-radius: 10px;"></textarea>
                      </div>

                    </form>
                  </div>
                </div>
              </div>           
            </div>

                
             
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                >Copyright © 2022. All Rights Reserved</span
              >
             
            </div>
          </footer>
          <!-- partial -->
        </div>
    @endsection