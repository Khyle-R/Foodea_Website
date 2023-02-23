@extends('admin.index')
@section('content')
<div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title black">Order Accept</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Order Accept
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                <li class="nav-size nav-item"><a class="nav-link" href="/admin_orders">All</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderpending">Pending</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderreview">Reviewing</a></li>
                                <li class="nav-size nav-item"><a class="nav-link active" href="/orderaccept">Accepted</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderarchieve">Rejected</a></li>
                                </ul>
                            </div>
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
                                <tr>
                                    <td>314324211213</td>
                                    <td>ADFAFS43</td>
                                    <td>AFG22</td>
                                    <td>December 30. 2023</td>
                                    <td>6</td>
                                    <td>
                                        <div class="dropdown action-label">
                                                <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class=" pending mdi mdi-radiobox-marked"></i> Status
                                                </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#ReviewModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Reviewing</a>
                                                <a data-toggle="modal" data-target="#AcceptedModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                                <a data-toggle="modal" data-target="#RejectModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
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
                                <div class="modal fade" id="ReviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{}">
                                                <input type="hidden" name="status" value="Reviewing">
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

                                <!-- ACCEPT MODAL -->
                                <div class="modal fade" id="AcceptedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{}">
                                                <input type="hidden" name="status" value="Accepted">
                                                <input type="hidden" name="id" value="{}">
                                                <input type="hidden" name="rider_id" value="{}">
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
                                <div class="modal fade" id="RejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
@endsection 