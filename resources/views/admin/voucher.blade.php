@extends('admin.index')
@section('content')
        <div class="content-wrapper">
        <div class="table-title mt-1 mb-2 px-3">
			<div class="row">
                <div class="col-12 d-flex justify-content-end">
					<a href="#addContentModal" class="btn btn-success" data-toggle="modal">
					<i class="material-icons">&#xE147;</i>
					<span>Add Voucher</span>
					</a>
                </div>
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
                                    <th>Voucher Name</th>
                                    <th>Voucher Code</th>
                                    <th>Discription</th>
                                    <th>Expirartion Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voucher as $key => $data)
                                    
                                <tr>
                                    <td>{{ $data->voucher_name}}</td>
                                    <td>{{ $data->voucher_code}}</td>
                                    <td>{{ $data->description}}</td>
                                    <td>
                                        {{ $data->exp_date}}
                                        
                                    </td>
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
                                                <a class="action-btn dropdown-item black" data-toggle="modal" data-target="#ViewModal{{ $data->voucher_id}}" href=""><i class="fa fa-pencil m-r-5"></i>View</a>
                                                <a class="action-btn dropdown-item black" data-toggle="modal" data-target="#DeleteModal{{ $data->voucher_id}}" href=""><i class="fa fa-trash-o m-r-5"></i>Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                <!-- MODAL STARTS HERE -->
                                <!-- VIEW CONTENT -->
                                <div class="modal fade" tabindex="-1" id="ViewModal{{ $data->voucher_id}}" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-white">View Voucher</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body text-dark">
                                                <div class="form-group">
                                                    <form method="post" action="{{ route('voucher.addVoucher')}}">
                                                    @csrf
                                                    <label>Voucher Name</label>
                                                    <input id="voucherName" name="voucherName" type="text" class="form-control" placeholder="{{ $data->voucher_name}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Voucher Code</label>
                                                    <input id="voucherName" name="voucherName" type="text" class="form-control" placeholder="{{ $data->voucher_code}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="{{ $data->description}}"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input id="voucherName" name="voucherName" type="text" class="form-control" placeholder="{{ $data->status}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Created</label>
                                                    <input id="voucherName" name="voucherName" type="text" class="form-control" placeholder="{{ $data->date}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expiry Date</label>
                                                    <input id="voucherName" name="voucherName" type="text" class="form-control" placeholder="{{ $data->exp_date}}" required>
                                                </div>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- DELETE MODAL -->
                                <div class="modal fade" id="DeleteModal{{ $data->voucher_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header d-flex justify-content-between">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body">
                                                Are you sure do you want to delete?
                                                <input type="hidden" name="status" value="Reviewing">
                                                <input type="hidden" name="id" value="{}">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <a type="submit" href="voucherdelete/{{ $data->voucher_id}}" class="btn red-btn">Confirm</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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
                                <!-- ADD CONTENT -->
                                <div class="modal fade" tabindex="-1" id="addContentModal" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-white">Add Voucher</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body text-dark">
                                                <div class="form-group">
                                                    <form method="post" action="{{ route('voucher.addVoucher')}}">
                                                    @csrf
                                                    <label>Voucher Name</label>
                                                    <input id="voucherName" name="voucherName" type="text" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Description</label>
                                                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expiry Date</label>
                                                    <input id="expDate" name="expDate" type="date" class="form-control" min="2023-01-01" required>
                                                </div>
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
        
@endsection





