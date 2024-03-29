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
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderpreparing">Ready for pick up</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderdelivering">Delivering</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderdelivered">Delivered</a></li>
                                </ul>
                            </div>
                        </div>

        <div class="row mb-2">

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                          <div class="dash-widget-info">
                                  <h3>{{ $TotalOrders}}</h3>
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
                                <h3>{{ $PendingOrders}}</h3>
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
									<h3>{{ $PreparingOrders}}</h3>
								<span>Ready for pick up</span>
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
									<h3>{{ $DeliveringOrders}}</h3>
								<span>Delivering</span>
							</div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    	</div>
                	</div>
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="sortStart" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Customer’s ID</th>
                                    <th>Order Key</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($orders as $key => $data)
                                <tr>
                                    <td>{{ $data->order_id}}</td>
                                    <?php 
                                        $id_user = $data->customer_id;
                                        $curr_user = App\Models\AppUser::where('user_id', $id_user)->get();
                                    ?>
                                    @foreach($curr_user as $curr)
                                        <td>{{$curr->firstname. ' '.$curr->lastname}}</td>
                                    @endforeach
                                    <td>{{ $data->order_key}}</td>
                                    <td>{{ $data->date}}</td>
                                    <td>
                                        <div class="dropdown action-label">
                                                <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class=" pending mdi mdi-radiobox-marked"></i> {{ $data->status}}
                                                </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                {{-- <a data-toggle="modal" data-target="#PendingModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Pending</a> --}}
                                                <a data-toggle="modal" data-target="#PreparingModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Ready for pick up</a>
                                                {{-- <a data-toggle="modal" data-target="#DeliveringModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Delivering</a>
                                                <a data-toggle="modal" data-target="#DeliveredModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Delivered</a> --}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="action-icon" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#ViewModal{{ $data->order_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-pencil m-r-5"></i>View</a>
                                            </div>
                                        </div>
                                        <!-- MODAL STARTS HERE -->
                                        <!-- VIEW CONTENT -->
                                        <div class="modal fade" tabindex="-1" id="ViewModal{{ $data->order_id}}" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <!-- MODAL HEADER -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-white">View Orders</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- MODAL BODY -->
                                                    <div class="modal-body text-dark">
                                                        <div class="table-responsive">
                                                            <table class="ordetails mx-auto">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Product Name</th>
                                                                        <th>Quantity</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                        $current_key = $data->order_key;
                                                                        $order_with_key = App\Models\tbl_orders::where('order_key', $current_key)->with('transaction_details')->get();  
                                                                    ?>
                                                                    @foreach($order_with_key as $key2 => $item)
                                                                        
                                                                        @if($item->order_key == $current_key)
                                                                            <?php
                                                                                $prod_id = $item->product_id;
                                                                                $food_items = App\Models\tbl_product::where('product_id', $prod_id)->get();
                                                                            ?>
                                                                            @foreach($food_items as $single)
                                                                                <tr>
                                                                                    <td><img src="{{$single->product_image}}" alt="image" width="50" height="40"></td>
                                                                                    <td>{{$single->product_name}}</td>
                                                                                    <th>{{ $item->quantity}}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                            
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL FOOTER -->
                                                    <div class="modal-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                

                                <!-- PENDING MODAL -->
                                <div class="modal fade" id="PendingModal{{ $data->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{{ route('order.Pending')}}">
                                                @csrf
                                                <input type="hidden" name="status" value="Pending">
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

                                <!-- PREPARING MODAL -->
                                <div class="modal fade" id="PreparingModal{{ $data->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{{ route('order.Preparing')}}">
                                                  @csrf
                                                <input type="hidden" name="status" value="Reiv">
                                                <input type="hidden" name="id" value="{}">
                                                <input type="hidden" name="order_id" id="order_id" value="{{ $data->order_key}}">
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

                                <!-- DELIVERING MODAL -->
                                <div class="modal fade" id="DeliveringModal{{ $data->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{{ route('order.Delivering')}}">
                                                  @csrf
                                                <input type="hidden" name="status" value="Delivering">
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

                                <!-- DELIVERED MODAL -->
                                <div class="modal fade" id="DeliveredModal{{ $data->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{{ route('order.Delivered')}}">
                                                @csrf
                                                <input type="hidden" name="status" value="Delivered">
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

                                 <!-- TO BE RECEIVED MODAL -->
                                 <div class="modal fade" id="TobeReceiveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                Do you want to change the status to "To be Received"?
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
                  
            </div>
        </footer>
        <!-- END OF FOOTER --> 
        <!-- partial -->
@endsection 