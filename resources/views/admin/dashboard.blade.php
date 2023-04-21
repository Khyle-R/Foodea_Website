@extends('admin.index')
@section('content')

          <div class="content-wrapper">
            <div class="row">
              
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$totalRevenue}}</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                           
                          </p>
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
                      Total Revenue
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
                          <h3 class="mb-0">{{ $totalOrders}}</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                            
                          </p>
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
                      Total Orders
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
                          <h3 class="mb-0">{{$productSold}}</h3>
                          
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
                    <h6 class="text-muted font-weight-normal">Product Sold</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$totalProduct}}</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                          
                          </p>
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
                      Total Product
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sales</h4>
                    <canvas id="areaChart" style="height: 250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Orders</h4>
                    <canvas id="doughnutChart"></canvas>
                  </div>
                </div>
              </div>
              </div>

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product</h4>
                    <div class="table-responsive">
                       <div class="table-responsive">
                     <table id="example" class="table" style="width:100%">
                        <thead class="table-danger">
                           <tr>
                              <th>Product Name</th>
                              <th>Stock</th>
                              <th>Product Cost</th>
                              <th>Category</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($prod as $key => $data)
                              <tr>
                                 <td>
                                    <img src="{{ $data->product_image }}" alt="image" class="img-fluid"
                                       style=" height: 60px; width: 70px; border-radius: 2px;" />
                                    <span class="pl-2">{{ $data->product_name }}</span>
                                 </td>
                                 <td>{{ $data->stock }}</td>
                                 <td>{{ $data->price }}</td>
                                 <td>{{ $data->category_name }}</td>
                                
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
             <div class="row">
                 <div class="col-lg-4">
                   {{-- <div class="card mb-4">
                     <div class="card-body">
                       <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Messages</h4>
                      <a class="text-muted mb-1 small">View all</a>
                    </div>
                     <div class="preview-list">
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face6.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Leonard</h6>
                              <p class="text-muted text-small">5 minutes ago</p>
                            </div>
                            <p class="text-muted">
                              Well, it seems to be working now.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face8.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Luella Mills</h6>
                              <p class="text-muted text-small">
                                10 Minutes Ago
                              </p>
                            </div>
                            <p class="text-muted">
                              Well, it seems to be working now.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face9.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Ethel Kelly</h6>
                              <p class="text-muted text-small">2 Hours Ago</p>
                            </div>
                            <p class="text-muted">Please review the tickets</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face11.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Herman May</h6>
                              <p class="text-muted text-small">4 Hours Ago</p>
                            </div>
                            <p class="text-muted">
                              Thanks a lot. It was easy to fix it .
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div> --}}
                      </div>
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Top Selling Products</h4>
                      {{-- <a class="text-muted mb-1 small">View Product</a> --}}
                    </div>
                      <div class="table-responsive">
                      <table class="table table-striped">
                        <thead class="table-danger text-light">
                          <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Sales</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($products as $product)
                              <tr>
                            <td>{{ $product->product_id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->totals }}</td>
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
      // SALES
      var DateLabel =  {!! json_encode($day) !!};
      var DateData =  {!! json_encode($total) !!};

      //ORDERS
      var OrderLabel =  {!! json_encode($order_status) !!};
      var OrderData =  {!! json_encode($order_count) !!};
        

    </script>

@endsection