@extends('superadmin.superadmin_index')
@section('content')

<div class="content-wrapper">
    <div class="row">

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
                            Showing 3 Applicants
                        </h5>
                    </div>

                    <div class="row">
             @foreach ($Data as $partner)      
            <div class="col-sm-3 mb-2">
                <a href="/superadmin_partnerdetails/{{ $partner->merchant_id }}">
                <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img class="circle mb-2" height="87" width="90" src="{{ url('uploads/rider_documents/'.$partner->logo) }}" alt="">
                        <p class="card-text black-name">{{ $partner->business_name }}</p>
                    </div>
                     <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a class="dropdown-item" href=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                            </div>
                        </div>
                </div>
                </div>
                </a>
            </div>
          @endforeach
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
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
            2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
            Free
            <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                templates</a>
            from Bootstrapdash.com</span>
    </div>
</footer>
<!-- partial -->
</div>
@endsection