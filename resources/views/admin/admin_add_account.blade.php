@extends('admin.index')
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
              @if (Session::has('fail'))
                    <p style="display:none" class="failed"></p>
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">{{ Session::pull('fail') }}</span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    @endif
              <!---/ALERT BOX --->
    </div>

    <div class="page-header">
        <h3 class="page-title black">Add Account</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Menu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                   Add Account
                </li>
           
            </ol>
        </nav>
    </div>
   
             <div class="tab-content">
              
                <!-- Profile Info Tab -->
                <div id="emp_profile" class="pro-overview tab-pane fade show active">
                  
                  <div class="row">
                    
                        <div class="col-md-12 d-flex">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="card-title">Account List</h3>
                                          <a href="/admin_add_email" class="add-link px-3 py-2">Add new Account</a>
                                   </div>
                                   <div class="table-responsive">
                              <table id="example" class="table" style="width:100%">
                        <thead>
                               
                            <tr>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                              
                        </thead>
                        <tbody>
                             @foreach ($Data as $partner)
                            <tr>
                                <td>{{ $partner->email }}</td>
                                <td>
                                  <div class="dropdown action-label">
                                         
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" accepted mdi mdi-radiobox-marked"></i> {{ $partner->status }}
                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                {{-- <a data-toggle="modal" data-target="#AcceptedModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Active</a> --}}
                                                <a data-toggle="modal" data-target="#AcceptedModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                       
                                            
                                        </div></td>
                                <td>{{ $partner->role }}</td>
                                <td>
                                       <div class="dropdown">
                                    <a href="#" class="action-icon" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                                    <div class="bg-white dropdown-menu dropdown-menu-right">
                                        <a class="action-btn dropdown-item black" href="#"><i class="fa fa-pencil m-r-5"></i> View</a>
                                    </div>
                                </div>
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