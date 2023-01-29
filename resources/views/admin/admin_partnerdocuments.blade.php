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
                          <a type="button" href="/account" class="btn btn-link btn-fw  font-weight-normal text-white">Information</a>
                          
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
                    <div class="list-group list-group-flush  scrollarea">
                
                      <div class="text-center" style="padding-bottom: 80px;">
                      <img class="img-lg rounded-circle" src="assets/images/faces/face23.jpg" alt="">
                       <h6 class="text-dark font-weight-bolder " style="padding-top:10px;">FOODEA</h6> 
                       <span class="text-dark font font-weight-bolder">5.0</span>
                       <span class="fa fa-star text-warning"></span>
                       <span class="fa fa-star text-warning"></span>
                       <span class="fa fa-star text-warning"></span>
                       <span class="fa fa-star text-warning"></span>
                       <span class="fa fa-star text-warning"></span>
                       
                      </div>
                    
                    </div>
                    <h4 class="card-title font-weight-bolder" style="color: #272625;">Uploaded Documents</h4>
                    <span class="mb-1 ml-5 font-weight-bolder" style="color: #272625;">BIR Registration</span>
                    <span class="fa fa-check-circle" style="color:#fc424a; font-size:20px; padding-left: 50px;"></span>
              <div class="mt-5" style="padding-left: 25px;">
                <button type="button" class="btn btn-outline-warning btn-lg btn-rounded ">Waiting for Approval</button>
              </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  
                     <div class="card-header">
                      
                      <h4 class="font-weight-bold" style="color: #272625;">Documents</h4>
                        
                      
                  
                        
                        
                    
                    
                    </div>
                    <div class="card-body">
                    
                        <div class="list-group list-group-flush border-bottom scrollarea">
                
                            
                      <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <h6 class="mb-1 font-weight-bolder" style="color: #272625;">Business Permit </h6>
                          <span class="fa fa-times-circle" style="color:#fc424a; font-size:30px; padding-left: 50px;"></span>
                          
                        </div>
                        </a>
                      <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <h6 class="mb-1 font-weight-bolder" style="color: #272625;">BIR Registration</h6>
                          <span class="fa fa-times-circle" style="color:#fc424a; font-size:30px; padding-left: 50px;"></span>
                        </div>
                     </a>
                      <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <h6 class="mb-1 font-weight-bolder" style="color: #272625;">Valid Goverment ID</h6>
                          <span class="fa fa-times-circle" style="color:#fc424a; font-size:30px; padding-left: 50px;"></span>
                        </div>
                     </a>
                      <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <h6 class="mb-1 font-weight-bolder" style="color: #272625;">DTI Registration</h6>
                          <span class="fa fa-times-circle" style="color:#fc424a; font-size:30px; padding-left: 50px;"></span>
                        </div>    
                      </a> 
                      <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <h6 class="mb-1 font-weight-bolder" style="color: #272625;">Mayor's Permit </h6>
                          
                        </div>
                        </a>    
                    </div>
                    <div class="mt-5" style="padding-left: 25px;">
                      <button type="button" class="btn btn-danger btn-lg btn-rounded" style="float:right;">Upload Documents</button>
                    </div>
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