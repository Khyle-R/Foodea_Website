@extends('superadmin.superadmin_index')
@section('content')
         <div class="content-wrapper">
                 <div class="row">
                          
                        </div>
                        <div class="page-header">
                            <h3 class="page-title black"> Sales Report</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                       Sales Report
                                    </li>
                                </ol>
                            </nav>
                        </div>
                                 <div class="d-flex flex-row justify-content-end my-4">
                        <div class="title">
                    <a class="red-btn" href="superadmin_exportsales">Download Report</a>
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
                                <th>Merchant ID</th>
                                <th>Merchant Name</th>
                                <th>Total Sales</th>
                                <th>Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $sale)
                                <tr>
                                <td>{{ $sale->merchant_id }}</td>
                                <td>{{ $sale->name }}</td>
                                <td>{{ $sale->total }}</td>
                                <td>{{ $sale->date }}</td>
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