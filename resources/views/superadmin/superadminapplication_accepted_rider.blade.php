@extends('superadmin.superadmin_index')
@section('content')

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
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-sm-between px-3 mb-3">
                        <h5 class="card-title black">
                             @if ($accepted)
                                Showing {{ $accepted }} Applicants
                                @else
                                    Showing 0 Applicants 
                             @endif
                           
                        </h5>
                    </div>
                
                       @if(count($Data) > 0)
                    <div class="row">
             @foreach ($Data as $rider)      
            <div class="col-sm-3 mb-2">
                <a href="/superadmin_riderprofile/{{ $rider->rider_id }}">
                <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img class="circle mb-2" height="87" width="90" src="{{ $rider->rider_photo }}" alt="">
                        <p class="card-text black-name">{{ $rider->firstname. ' ' .$rider->lastname }}</p>
                    </div>
                     <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                <a data-toggle="modal" data-target="#EditModal{{ $rider->rider_id }}"  class="action-btn black dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-toggle="modal" data-target="#RemoveModal{{ $rider->rider_id }}" class="action-btn black dropdown-item" href=""><i class="fa fa-trash-o m-r-5"></i> Remove</a>
                            </div>
                        </div>
                </div>
                </div>
                </a>
            </div>
            <!-- Edit Modal -->
                    <div class="modal fade" id="EditModal{{ $rider->rider_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('UpdateAcceptedRider') }}">
                                @csrf
                             <div class="form-row">

                            <div class="form-group col-md-6">
                            <label for="first">First Name</label>
                            <input name="firstname" type="text" value="{{ $rider->firstname }}" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Middle Name</label>
                            <input name="middlename" type="text" value="{{ $rider->middlename }}" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="last">Last Name</label>
                           <input name="lastname" type="text" value="{{ $rider->lastname }}" class="form-control input-border" id="last" placeholder="Lastname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="suff">Suffix</label>
                           <input name="suffix" type="text" value="{{ $rider->suffix }}" class="form-control input-border" id="suff" placeholder="Suffix">
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="text" value="{{ $rider->email }}" class="form-control input-border" id="email" placeholder="Email">
                        </div>
                         <div class="form-group">
                            <label for="email">Mobile Number</label>
                            <input name="mobile_number" type="text" value="{{ $rider->mobile_number }}" class="form-control input-border" id="email" placeholder="Mobile number">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address</label>
                            <input name="address" type="text" value="{{ $rider->address }}" class="form-control input-border" id="inputAddress2" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input name="city" type="text" value="{{ $rider->city }}" class="form-control input-border" id="inputCity">
                            </div>
                           <div class="form-group col-md-6">
                            <label for="barang">Barangay</label>
                            <input name="barangay" type="text" value="{{ $rider->barangay }}" class="form-control input-border" id="barang">
                            </div>
                           
                        </div>
                     
                            <input type="hidden" name="accepted_rider_id" value="{{ $rider->accepted_rider_id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Remove Modal -->
                     <div class="modal fade" id="RemoveModal{{ $rider->rider_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to remove this rider?
                            <form method="post" action="{{ route('RemoveRider') }}">
                                @csrf
                            <input type="hidden" name="accepted_rider_id" value="{{ $rider->accepted_rider_id }}">
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
              
          @endforeach
            </div>
            @else
             <div class="text-center">
          <p class="black">No Rider Found</p>
          </div>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022. All Rights Reserved</span>
      
    </div>
</footer>
<!-- partial -->
</div>
@endsection