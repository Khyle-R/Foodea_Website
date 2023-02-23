@extends('admin.index')
@section('content')
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title black">Voucher</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Menu</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Voucher
                    </li>
                </ol>
            </nav>
        </div>
        <div class="card mb-4">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                <li class="nav-size nav-item"><a class="nav-link active" href="/voucher">All</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/voucherEnable">Enable</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/voucherDisable">Disabled</a></li>
                                </ul>
                            </div>
                        </div>

        <div class="row mb-2">

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                          <div class="dash-widget-info">
                                  <h3>{{ $voucherCount}}</h3>
                              <span>All</span>
                          </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                                <h3>{{ $EnableVoucher}}</h3>
                            <span>Enable</span>
                        </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    </div>
                        </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-3">
                <div class="card dash-widget">
                    <div class="card-body">
						<div class="d-flex align-items-center justify-content-between px-3">
							<div class="dash-widget-info">
									<h3>{{ $DisableVoucher}}</h3>
								<span>Disable</span>
							</div>
							<span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
						</div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <th>Expiration Date</th>
                                    <th>Discount</th>
                                    <th>Total Claimed</th>
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
                                    <td>{{ $data->discount}}</td>
                                    <td>{{ $data->total_claimed}}</td>
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" pending mdi mdi-radiobox-marked"></i>{{ $data->status}}
                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#EnableModal{{ $data->voucher_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Enable</a>
                                                <a data-toggle="modal" data-target="#DisableModal{{ $data->voucher_id}}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i>Disable</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="action-icon" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a class="action-btn dropdown-item black" href="/voucherView"><i class="fa fa-pencil m-r-5"></i>View</a>
                                                <a class="action-btn dropdown-item black" data-toggle="modal" data-target="#UpdateModal{{ $data->voucher_id}}" href=""><i class="fa fa-trash-o m-r-5"></i>Update</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                <!-- MODAL STARTS HERE -->
                                <!-- UPDATE CONTENT -->
                                <div class="modal fade" tabindex="-1" id="UpdateModal{{ $data->voucher_id}}" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-white">Update the Voucher Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body text-dark">
                                                <div class="form-group">
                                                    <form method="post" action="{{ route('voucher.Update')}}">
                                                        @csrf
                                                    <label>Voucher Name</label>
                                                    <input id="voucherName" name="voucherName" type="text" class="form-control" value="{{ $data->voucher_name}}" placeholder="" required>
                                                    <input type="hidden" name="voucher_id" value="{{ $data->voucher_id}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="{{ $data->voucher_name}}">{{ $data->description}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Discount</label>
                                                    <input id="discount" name="discount" type="text" class="form-control" value="{{ $data->discount}}" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expiration Date</label>
                                                    <input type="date" id="expDate" name="expDate" type="text" class="form-control" value="{{ $data->date}}" placeholder="" required>
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
                                <!-- ENABLE MODAL -->
                                <div class="modal fade" id="EnableModal{{ $data->voucher_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                Do you want to change the status to Enable?
                                                <form method="post" action="{{ route('voucher.Enable')}}">
                                                    @csrf
                                                <input type="hidden" name="status" value="Accepted">
                                                <input type="hidden" name="voucher_id" value="{{ $data->voucher_id}}">
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

                                <!-- DISABLED MODAL -->
                                <div class="modal fade" id="DisableModal{{ $data->voucher_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                Do you want to change the status to Disable?
                                                <form method="post" action="{{ route('voucher.Disable')}}">
                                                    @csrf
                                                <input type="hidden" name="status" value="Rejected">
                                                <input type="hidden" name="voucher_id" value="{{ $data->voucher_id}}">
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
                                                    <form method="post" action="">
                                                    <label>Discount</label>
                                                    <input id="discount" name="discount" type="text" class="form-control" required>
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





