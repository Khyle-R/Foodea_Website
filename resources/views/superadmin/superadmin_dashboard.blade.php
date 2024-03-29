@extends('superadmin.superadmin_index')
@section('content')

 <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          @if($revenue)
                        
                          <h3 class="mb-0">₱ {{ $revenue }}.00</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                           
                          </p>
                          @else
                           <h3 class="mb-0">₱ 0.00</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                           
                          </p>
                            @endif
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Revenue
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          @if($riders)
                          <h3 class="mb-0">{{ $riders }}</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                          
                          </p>
                          
                          @else
                          <h3 class="mb-0">0</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                            
                          </p>
                          @endif
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Riders
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          @if($merchant)
                          <h3 class="mb-0">{{ $merchant }}</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                     
                          </p>
                          
                          @else
                          <h3 class="mb-0">0</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                     
                          </p>
                          @endif
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span
                            class="mdi mdi-arrow-bottom-left icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"> Merchants</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          @if($users)
                          <h3 class="mb-0">{{ $users }}</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                       
                          </p>
                          @else
                           <h3 class="mb-0">0</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                       
                          </p>
                          @endif
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                     Users
                    </h6>
                  </div>
                </div>
              </div>
            </div>  
            
            <!-- Sales -->
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Revenue</h4>
                    <canvas id="areaChart" style="height: 250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-body">
                      <div class="d-flex flex-row justify-content-between my-2">
                        <div class="title">
                    <h4 class="card-title  align-items-center">Top Selling Merchants</h4>
                    </div>
                    
                    </div>
                    
                    <div class="table-responsive">
                    <table id="topSellingMerchant" class="table" style="width:100%">
                        <thead>
                          
                            <tr>
                                <th>ID</th>
                                <th>Business Name</th>
                                <th>Email</th>
                                <th>Business Type</th>
                                <th>Orders</th>
                            </tr>
                          
                            
                        </thead>
                        <tbody>
                          @foreach ($TopSellingMerchant as $tops )
                            <tr>
                                <td> {{ $tops->merchant_id }}</td>
                                <td>{{ $tops->business_name }}</td>
                                <td>{{ $tops->store_email }}</td>
                                <td>{{ $tops->business_type }}</td>
                                <td>{{ $tops->totals }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    
                    </table>
                    </div>
            </div>
          </div>  
         </div>
         
              </div>

              <!--Recent Applcation-->
              <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                       <div class="d-flex flex-row justify-content-between my-2">
                        <div class="title">
                    <h4 class="card-title  align-items-center">Top Selling Products</h4>
                    </div>
                    </div>
                    <div class="table-responsive">
                    <table id="example1" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Sales</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                          @if($products == 0)
                           <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                            </tr>
                        
                          @else
                          @foreach ($products as $prod)
                            <tr>
                                <td>{{ $prod->product_id }}</td>
                                <td>{{ $prod->product_name }}</td>
                                <td>{{ $prod->category_name }}</td>
                                <td>{{ $prod->totals }}</td>
                            
                            </tr>
                           @endforeach
                             @endif
                        </tbody>
                    
                    </table>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between my-2">
                        <div class="title">
                    <h4 class="card-title  align-items-center">Recent Applications</h4>
                    </div>
                    
                    </div>
                      <div class="table-responsive">
                    <table id="example2" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Vehicle Type</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Application</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($Data as $recent)
                            <tr>
                                <td>
                                    <img class="circle mr-2" src="{{ url(('uploads/'. 'rider_documents'. '/'.$recent->rider_id. '/'). $recent->rider_photo) }}" alt="">
                                    {{ $recent->firstname. ' ' .$recent->lastname }}
                                </td>
                                <td>{{ $recent->vehicle_type }}</td>
                                <td>{{ $recent->email }}</td>
                                <td>
                                  <i class=" pending mdi mdi-radiobox-marked"></i>
                                  {{ $recent->status }}</td>
                                <td>{{ $recent->date }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    
                    </table>
                    </div>
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

         <script type="text/javascript">
      
      var DateLabel =  {!! json_encode($day) !!};
      var DateData =  {!! json_encode($total) !!};

      var YearLabel =  {!! json_encode($year) !!};
      var YearData =  {!! json_encode($barsales) !!};
    </script>
        @endsection