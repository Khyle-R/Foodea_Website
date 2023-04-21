@extends('admin.index')
@section('content')
          <div class="content-wrapper">
            <div class="row">
              
            </div>
            <div class="page-header">
        <h3 class="page-title black">Transaction History</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Menu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Transaction History
                </li>
           
            </ol>
        </nav>
    </div>
            <!-- rider table buttons -->
            {{-- <div class="row justify-content-sm-between px-3">
              <h4 class="card-title"></h4>
              <div class="template-demo">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Daily </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>

                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Date </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item" href="#">Day</a>
                    <a class="dropdown-item" href="#">Month</a>
                    <a class="dropdown-item" href="#">Year</a>
                  </div>
                </div>

                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Status </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                    <a class="dropdown-item" href="#">Accepted</a>
                    <a class="dropdown-item" href="#">Cancelled</a>
                    <a class="dropdown-item" href="#">Delivered</a>
                    <a class="dropdown-item" href="#">In Delivery</a>
                  </div>
                </div>
              </div>
            </div> --}}

      
           <!-- rider table -->
            <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">  
                      <div class="table-responsive">
                        <table id="example" class="table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Transaction ID</th>
                              <th>Order Key</th>
                              <th>Customer’s Name</th>
                              <th>Rider's Name</th>
                              <th>Date</th>
                              <th>Total</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($history as $data)
                            <tr>
                              <td>
                                {{$data->order_id}}
                              </td>
                              <td>
                                {{$data->order_key}}
                              </td>
                              <td>
                                @if(isset($data->transaction_details) && isset($data->transaction_details->user_details))
                                  {{$data->transaction_details->user_details->firstname . ' ' . $data->transaction_details->user_details->lastname}}
                                @else
                                  {{'asd'}}
                                @endif
                              </td>
                              <td>
                                @if(isset($data->transaction_details) && isset($data->transaction_details->rider_details))
                                  {{$data->transaction_details->rider_details->firstname . ' ' . $data->transaction_details->rider_details->lastname}}
                                @else
                                  {{'asd'}}
                                @endif
                              </td>
                              <td>
                                {{$data->date}}
                              </td>
                              <td>
                                {{$data->total}}
                              </td>
                              <td>
                                {{$data->status}}
                              </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#viewdetails">View Details</button>
                              </td>
                            </tr>

                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


                <!-- Modal Details -->
            <div class="modal fade" id="viewdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Customer's Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <!-- Accepted & User -->
                            <label><i class="mdi mdi-circle text-success icon-sm"></i>Accepted</label>
                            <img class="rounded-circle mx-auto d-block py-2" src="assets/images/sample2.jpg" width="120" height="110"/>
                            <ul class="list-unstyled text-center text-small">
                              <li>John Paul Quia</li>
                              <li>CAMARIN CALOOCAN CITY</li>
                              <li>09185731806</li>
                            </ul>
            
                  <!-- Orders -->
                  <div class="table-responsive-sm">
                    <table class="ordetails">
                      <thead>
                        <tr>
                          <th>Order</th>
                          <th>Product Name</th>
                          <th>Qty</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img
                              src="assets/images/milktea.jpg"
                              alt="image" width="40" height="50"
                            />
                          </td>
                          <td>Classic Milk Tea R</td>
                          <td>1</td>
                          <td>₱95.00</td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="assets/images/milktea.jpg"
                              alt="image" width="40" height="50"
                            />
                          </td>
                          <td>Premium Milk Tea R</td>
                          <td>1</td>
                          <td>₱115.00</td>
                        </tr>
                        <tr>
                          <td colspan="2"></td>
                          <td>Total</td>
                          <td>₱210.00</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                         <div class="cod">
                         <label>Cash on Delivery</label>
                         </div>
                         <span class="ridername">
                         <div>
                         <label>Rider’s name</label>
                         </div>
                         <div>
                         <label>Juan Dela cruz</label>
                         </div>
                         </span>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-block btn-rounded " data-dismiss="modal">Back</button>
                  </div>
                </div>
              </div>
            </div>
            

            <!-- Modal Delivered-->
            <div class="modal fade" id="Delivered" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <div class="container">
                    <div class="row">
                      <div class="col">
                        <label style="font-size: 11px;">Febraury 20, 2022</label>
                        <img src="assets/images/milktea.jpg" class="img-thumbnail"  width="105" height="100"/>
                        <div>
                        <label class="text-small px-2 text-center">4.5
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star-half text-warning"></i>
                        </label>
                      </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label class="pt-2" style="font-size: 11px;">Quantity</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="1">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Price</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="₱95.00">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Status</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="Delivered">
                        </div>
                      </div>
                    </div>

                    <div class="row py-3">
                      <div class="form-container">
                      <label style="font-size: 11px;">Product Name</label>
                      <input type="text" readonly placeholder="Milktea" />
                      <label style="font-size: 11px;">Customer’s Name</label>
                      <input type="text" readonly placeholder="John Doe" />
                      <label style="font-size: 11px;">Rider’s Name</label>
                      <input type="text" readonly placeholder="Juan Dela Cruz" />
                      <label style="font-size: 11px;">Comment</label>
                      <textarea type="text" readonly placeholder="Delicious nice flavor exact sweetness"></textarea>
                      <label style="font-size: 11px;">Amount</label>
                      <input type="text" readonly placeholder="₱95.00"/>
                    </div>
                    </div>
                   </div>
                   
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger  btn-rounded" style="width: 40%;" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger   btn-rounded" style="width: 50%;">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>  

            <!-- Modal Cancelled-->
          <div class="modal fade" id="Cancelled" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-sm" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <label style="font-size: 11px;">Febraury 20, 2022</label>
                        <img src="assets/images/milktea.jpg" class="img-thumbnail"  width="105" height="100"/>
                        <div>
                        <label class="text-small px-2 text-center">0
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                        </label>
                      </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label class="pt-2" style="font-size: 11px;">Quantity</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="1">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Price</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="₱95.00">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Status</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="Cancelled">
                        </div>
                      </div>
                    </div>

                    <div class="row py-3">
                      <div class="form-container">
                      <label style="font-size: 11px;">Product Name</label>
                      <input type="text" readonly placeholder="Milktea" />
                      <label style="font-size: 11px;">Customer’s Name</label>
                      <input type="text" readonly placeholder="John Paul" />
                      <label style="font-size: 11px;">Rider’s Name</label>
                      <input type="text" readonly placeholder="Juan Dela Cruz" />
                      <label style="font-size: 11px;">Comment</label>
                      <textarea type="text" readonly placeholder="Wrong Order"></textarea>
                      <label style="font-size: 11px;">Amount</label>
                      <input type="text" readonly placeholder="₱95.00" />
                    </div>
                    </div>
                  </div>
                   
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger  btn-rounded" style="width: 40%;" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger   btn-rounded" style="width: 50%;">Submit</button>
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
 @endsection