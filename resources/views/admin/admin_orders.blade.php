@extends('admin.index')
@section('content')
<div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title black">Order</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Orders
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                <li class="nav-size nav-item"><a class="nav-link active" href="/admin_orders">All</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderpending">Pending</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderreview">Reviewing</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderaccept">Accepted</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderarchieve">Rejected</a></li>
                                </ul>
                            </div>
                        </div>

                <div class="row mb-2">
                     <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                                <h3>0</h3>
                            <span>All</span>
                        </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                                <h3>0</h3>
                            <span>Pending</span>
                        </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card dash-widget">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                                <h3>0</h3>
                            <span>Reviewing</span>
                        </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card dash-widget">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                                <h3>0</h3>
                            <span>Accepted</span>
                        </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    </div>
                        </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card dash-widget">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                                <h3>0</h3>
                            <span>Rejected</span>
                        </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    </div>
                        </div>
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="example" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Customer’s ID</th>
                                    <th>Product ID</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($orders as $key => $data)
                                  
                              
                                <tr>
                                    <td>{{ $data->order_id}}</td>
                                    <td>{{ $data->customer_id}}</td>
                                    <td>{{ $data->product_id}}</td>
                                    <td>{{ $data->date}}</td>
                                    <td>{{ $data->total}}</td>
                                    <td>
                                        <div class="dropdown action-label">
                                                <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class=" pending mdi mdi-radiobox-marked"></i> Status
                                                </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#ReviewModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Reviewing</a>
                                                <a data-toggle="modal" data-target="#AcceptedModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                                <a data-toggle="modal" data-target="#RejectModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="action-icon" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a class="action-btn dropdown-item black" href="#"><i class="fa fa-pencil m-r-5"></i>View</a>
                                                <a data-toggle="modal" data-target="#DeleteContent" class="action-btn dropdown-item black" href="#"><i class="fa fa-trash-o m-r-5"></i>Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- MODAL STARTS HERE -->
                                <!-- REVIEW MODAL -->
                                <div class="modal fade" id="ReviewModal{{ $data->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header d-flex justify-content-between">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body">
                                                Do you want to change the status?
                                                <form method="post" action="{{ route('order.Review')}}">
                                                @csrf
                                                <input type="hidden" name="status" value="Reviewing">
                                                <input type="hidden" name="order_id" id="order_id"  value="{{ $data->order_id}}">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- ACCEPT MODAL -->
                                <div class="modal fade" id="AcceptedModal{{ $data->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body">
                                                Do you want to change the status to accept?
                                                <form method="post" action="{{ route('order.Accept')}}">
                                                  @csrf
                                                <input type="hidden" name="status" value="Accepted">
                                                <input type="hidden" name="id" value="{}">
                                                <input type="hidden" name="order_id" id="order_id" value="{{ $data->order_id}}">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- REJECTED MODAL -->
                                <div class="modal fade" id="RejectModal{{ $data->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL MODAL -->
                                            <div class="modal-body mt-3">
                                                Do you want to change the status to reject?
                                                <form method="post" action="{{ route('order.Reject')}}">
                                                  @csrf
                                                <input type="hidden" name="status" value="Rejected">
                                                <input type="hidden" name="order_id" id="order_id" value="{{ $data->order_id}}">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- DELETE CONTENT -->
                                <div class="modal fade" id="DeleteContent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL MODAL -->
                                            <div class="modal-body mt-3">
                                                Do you want to delete this? 
                                                <form method="post" action="{}">
                                                <input type="hidden" name="status" value="Rejected">
                                                <input type="hidden" name="id" value="{}">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF ROW -->
        </div>
        <!-- CONTENT-WRAPPER ENDS -->      
        <!-- FOOTER -->          
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2023. All Rights Reserved</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                        <a  href=""
                            target="_blank">from foodea.com 
                        </a>
                    </span>
            </div>
        </footer>
        <!-- END OF FOOTER --> 
        <!-- partial -->
        

   <!-- <div class="content-wrapper">
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
                        <h4 class=" mb-1 mb-sm-0" style="color: #FEEECB;">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">
                          Your account has limited access, please complete the documents needed so you can access all features.
                        </p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="#"
                            class="btn btn-warning btn-rounded get-started-btn text-decoration-none"
                            >Upload documents</a
                          >
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-sm-between px-3">
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
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">  
                      <div class="table-responsive text-center">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Order Number</th>
                              <th>Customer’s ID</th>
                              <th>Product ID</th>
                              <th>Date</th>
                              <th>Total</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($orders as $key => $data)
                            <tr>
                              <td>
                                bc1qxy2kgdygjrsqtzq2n0y
                              </td>
                              <td>
                                202223131
                              </td>
                              <td>12387</td>
                              <td>
                                Febraury 23, 2022
                              </td>
                              <td>₱95.00</td>
                              <td>
                                  @if ($data->status =='Cancelled')
                                      <button class="badge badge-danger" data-toggle="modal" data-target="#Cancelled">
                                        Cancelled
                                      </button>
                                    @elseif($data->status=='Delivered')
                                      <button class="badge badge-success" data-toggle="modal" data-target="#Cancelled">
                                        Delivered
                                      </button>
                                    @elseif($data->status=='Indelivery')
                                    <button class="badge badge-warning" data-toggle="modal" data-target="#Cancelled">
                                      Indelivery
                                    </button>
                                    @else($data->status=='Accepted')
                                      <button class="badge badge-info" data-toggle="modal" data-target="#Cancelled">
                                        Accepted
                                      </button>
                                    
                                    @endif
                              </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger">View Details</button>
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
        </div> -->
@endsection 