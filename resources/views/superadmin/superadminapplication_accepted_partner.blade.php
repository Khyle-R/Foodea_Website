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
        <h3 class="page-title black">Partner Application</h3>
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
                            @if($accepted)
                            Showing {{ $accepted }} applicants
                            @else
                                    Showing 0 Applicants 
                            @endif
                        </h5>
                    </div>
                    
            @if(count($Data) > 0)
                    <div class="row">
             @foreach ($Data as $partner)      
            <div class="col-sm-3 mb-2">
                <a href="/superadmin_partnerdetails/{{ $partner->merchant_id }}">
                <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img class="circle mb-2" height="87" width="90" src="{{ $partner->logo }}" alt="">
                        <p class="card-text black-name">{{ $partner->business_name }}</p>
                    </div>
                     <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                <a data-toggle="modal" data-target="#EditModal{{ $partner->merchant_id }}" class="action-btn dropdown-item black" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-toggle="modal" data-target="#RemoveModal{{ $partner->merchant_id }}" class="action-btn dropdown-item black" href=""><i class="fa fa-trash-o m-r-5"></i> Remove</a>
                            </div>
                        </div>
                </div>
                </div>
                </a>
            </div>

             <!-- Edit Modal -->
                    <div class="modal fade" id="EditModal{{ $partner->merchant_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('UpdateAcceptedPartner') }}">
                                @csrf
                             <div class="form-row">

                            <div class="form-group col-md-6">
                            <label for="first">Business Name</label>
                            <input name="business_name" type="text" value="{{ $partner->business_name }}" class="form-control input-border" id="first" placeholder="Business Name">
                            </div>

                             <div class="form-group col-md-6">
                            <label for="inputState">Business Type</label>
                            <select name="business_type" id="inputState" class="custom-select">
                                <option selected>{{ $partner->business_type }}</option>
                                <option>Sole Propietors</option>
                                <option>Corporation</option>
                            </select>
                            </div>
                          

                            <div class="form-group col-md-6">
                            <label for="last">Barangay</label>
                           <input name="barangay" type="text" value="{{ $partner->barangay }}" class="form-control input-border" id="last" placeholder="Barangay">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="suff">City</label>
                           <input name="city" type="text" value="{{ $partner->city }}" class="form-control input-border" id="suff" placeholder="City">
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <label for="email">Address</label>
                            <input name="address" type="text" value="{{ $partner->address }}" class="form-control input-border" id="email" placeholder="Address">
                        </div>
                         <div class="form-group">
                            <label for="email">Store Email</label>
                            <input name="store_email" type="text" value="{{ $partner->store_email }}" class="form-control input-border" id="email" placeholder="Store Email">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Store Number</label>
                            <input name="store_number" type="text" value="{{ $partner->store_number }}" class="form-control input-border" id="inputAddress2" placeholder="Store Number">
                        </div>
                        
                       
                            <input type="hidden" name="accepted_merchant_id" value="{{ $partner->accepted_merchant_id }}">
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
                     <div class="modal fade" id="RemoveModal{{ $partner->merchant_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to remove this merchant?
                            <form method="post" action="{{ route('RemoveMerchant') }}">
                                @csrf
                            <input type="hidden" name="accepted_merchant_id" value="{{ $partner->accepted_merchant_id }}">
                            <input type="hidden" name="merchant_id" value="{{ $partner->merchant_id }}">
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
          <p class="black">No Merchant Found</p>
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