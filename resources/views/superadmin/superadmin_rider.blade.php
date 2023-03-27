@extends('superadmin.superadmin_index')
@section('content')
        <div class="content-wrapper">
                <div class="row"></div>

         <div class="content-wrapper">
                 <div class="row">

                    <!---ALERT BOX --->
                    @if (Session::has('success'))
                    <p style="display:none" class="popup"></p>
            <div class="success hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">{{ Session::pull('success') }}</span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    @endif
             
              <!---/ALERT BOX --->
                        </div>
                        <div class="page-header">
                            <h3 class="page-title black">Rider Application</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                       Rider Application
                                    </li>
                                </ol>
                            </nav>
                        </div>
               
                        <div class="card mb-4">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                <li class="nav-size nav-item"><a class="nav-link active" href="">All</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_pending">Pending</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_review">Reviewing</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_accept">Accepted</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_archive">Archived</a></li>    
                                </ul>
                            </div>
                        </div>

                 <div class="row mb-2">
                     <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                           @if ($all)
                                <h3>{{ $all }}</h3>
                            @else
                                <h3>0</h3>
                           @endif
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
                           @if ($pending)
                                <h3>{{ $pending }}</h3>
                            @else
                                <h3>0</h3>
                           @endif
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
                               @if ($review)
                                <h3>{{ $review }}</h3>
                                @else
                                <h3>0</h3>
                           @endif

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
                            @if ($accept)
                                <h3>{{ $accept }}</h3>
                                @else
                                <h3>0</h3>
                           @endif
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
                          @if ($reject)
                                <h3>{{ $reject }}</h3>
                                @else
                                <h3>0</h3>
                           @endif
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
                                <th>Name</th>
                                <th>Vehicle Type Type</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Application</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Data as $rider)

                            <tr>
                                 <a href="">
                                <td>
                                    <img class="circle mr-2" src="{{ $rider->rider_photo }}" alt="">
                                    {{ $rider->firstname. ' ' .$rider->lastname }}
                                </td>
                                <td>{{ $rider->vehicle_type }}</td>
                                <td>{{ $rider->email }}</td>
                                <td>
                                    <div class="dropdown action-label">
                                          @if ($rider->status == 'pending' || $rider->status == 'Pending')
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" pending mdi mdi-radiobox-marked"></i> {{ $rider->status }}
                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#ReviewModal{{ $rider->rider_id }}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Reviewing</a>
                                                <a data-toggle="modal" data-target="#AcceptedModal{{ $rider->rider_id }}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                                <a data-toggle="modal" data-target="#RejectModal{{ $rider->rider_id }}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
                                            </div>
                                        @endif
                                          @if ($rider->status == 'reviewing' || $rider->status == 'Reviewing')
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" review mdi mdi-radiobox-marked"></i> {{ $rider->status }}
                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#AcceptedModal{{ $rider->rider_id }}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                                <a data-toggle="modal" data-target="#RejectModal{{ $rider->rider_id }}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
                                            </div>
                                        @endif
                                         @if ($rider->status == 'accepted' || $rider->status == 'Accepted')
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" accepted mdi mdi-radiobox-marked"></i> {{ $rider->status }}
                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#RejectModal{{ $rider->rider_id }}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
                                            </div>
                                        @endif
                                           @if ($rider->status == 'rejected' || $rider->status == 'Rejected')
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" rejected mdi mdi-radiobox-marked"></i> {{ $rider->status }}
                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#AcceptedModal{{ $rider->rider_id }}" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                            </div>
                                        @endif 
                                            
                                        </div>
                                </td>
                                <td>{{ $rider->date }}</td>
                                <td>
                                <div class="dropdown">
                                    <a href="#" class="action-icon" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                                    <div class="bg-white dropdown-menu dropdown-menu-right">
                                        <a class="action-btn dropdown-item black" href="/application_profile/{{ $rider->rider_id }}"><i class="fa fa-pencil m-r-5"></i> View</a>
                                        <a class="action-btn dropdown-item black" href="/application_profile_reject/{{ $rider->rider_id }}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                    </td>
                                    </a>
                            </tr>
                     
                  <!-- Review Modal -->
                    <div class="modal fade" id="ReviewModal{{ $rider->rider_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to change the status?
                            <form method="post" action="{{ route('Updatemodal') }}">
                                @csrf
                            <input type="hidden" name="status" value="Reviewing">
                            <input type="hidden" name="id" value="{{ $rider->rider_application_id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                     <!-- Accepted Modal -->
                    <div class="modal fade" id="AcceptedModal{{ $rider->rider_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to change the status?
                            <form method="post" action="{{ route('Updatemodal') }}">
                                @csrf
                            <input type="hidden" name="status" value="Accepted">
                            <input type="hidden" name="id" value="{{ $rider->rider_application_id }}">
                            <input type="hidden" name="rider_id" value="{{ $rider->rider_id }}">
                        </div>
                        <div class="modal-footer">
                             <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Rejected Modal -->
                    <div class="modal fade" id="RejectModal{{ $rider->rider_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to change the status?
                            <form method="post" action="{{ route('Updatemodal') }}">
                                @csrf
                            <input type="hidden" name="status" value="Rejected">
                             <input type="hidden" name="id" value="{{ $rider->rider_application_id }}">
                        </div>
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
                    </div>
        </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
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