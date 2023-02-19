@extends('admin.index')
@section('content')
   <div class="content-wrapper">
      <div class="row">
         <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
               <div class="card-body py-0 px-0 px-sm-3">
                  <div class="row align-items-center">
                     <div class="col-4 col-sm-3 col-xl-2">
                        <img src="../../assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="" />
                     </div>
                     <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="black mb-1 mb-sm-0">
                           Want even more features?
                        </h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">
                           Your account has limited access, please complete the
                           documents needed so you can access all features.
                        </p>
                     </div>
                     <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                           <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank"
                              class="btn btn-outline-warning btn-danger btn-rounded get-started-btn">Upload documents</a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="page-header">
         <h3 class="page-title">Product</h3>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Menu</a></li>
               <li class="breadcrumb-item active" aria-current="page">
                  Product
               </li>
            </ol>
         </nav>
      </div>
      <div class="row">
         <div class="col-12 grid-margin">
            <div class="card">
               <div class="card-body">
                  <div class="row justify-content-sm-between px-3 mb-3">
                     <h4 class="card-title">Inventory</h4>
                     <div class="row">
                        <div class="dropdown">
                           <button class="btn btn-secondary dropdown-toggle py-2 px-3 rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              Select Category
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Chicken</a>
                              <a class="dropdown-item" href="#">Drinks</a>
                           </div>
                        </div>

                        <div class="dropdown">
                           <button class="btn btn-secondary dropdown-toggle py-2 px-3 rounded mx-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              Select Order
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Ascending</a>
                              <a class="dropdown-item" href="#">Descending</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                     <table class="table" id="myInventory">
                        <thead class="table-danger">
                           <tr>
                              <th>
                                 <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" />
                                    </label>
                                 </div>
                              </th>
                              <th>Product Name</th>
                              <th>Product Cost</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($invent as $key => $data)
                              <tr>
                                 <td>
                                    <div class="form-check form-check-muted m-0">
                                       <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" />
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <img src="{{ asset('product_images/' . $data->product_image) }}" alt="image" class="img-fluid"
                                       style="
                                  height: 60px;
                                  width: 70px;
                                  border-radius: 2px;
                                " />
                                    <span class="pl-2">{{ $data->product_name }}</span>
                                 </td>
                                 <td>{{ $data->price }}</td>
                                 <td></td>
                                 <td>{{ $data->status }}</td>
                                 <td>
                                    <div class="row">

                                       <button type="button" class="badge badge-outline-success mr-3" data-toggle="modal" data-target="#restoreModal">
                                          Restore
                                       </button>

                                       <!-- Modal -->
                                       <div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="restoreModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="restoreModalLabel">Alert</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   Are you sure you want to Resore?
                                                </div>
                                                <div class="modal-footer">
                                                   <a class="badge badge-outline-dark" data-dismiss="modal">
                                                      Close
                                                   </a>
                                                   <a class="badge badge-outline-success" href="product/restore/{{ $data->inventory_id }}">
                                                      Resore
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <!-- Button trigger modal -->
                                       <button type="button" class="badge badge-outline-danger mr-3" data-toggle="modal" data-target="#deleteModal">
                                          Delete
                                       </button>

                                       <!-- Modal -->
                                       <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   Are you sure you want to Delete?
                                                </div>
                                                <div class="modal-footer">
                                                   <a class="badge badge-outline-dark" data-dismiss="modal">
                                                      Close
                                                   </a>
                                                   <a class="badge badge-outline-danger" href="product/delete/{{ $data->inventory_id }}">
                                                      Delete
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>



                                    </div>
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>

                  <ul class="pagination pt-2 align-items-center justify-content-center justify-content-sm-end">
                     <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                        </a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="#">1</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="#">2</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="#">3</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                           <span aria-hidden="true">&raquo;</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- content-wrapper ends -->
   <!-- partial:../../partials/_footer.html -->
   <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
         <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
         <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
            Free
            <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a>
            from Bootstrapdash.com</span>
      </div>
   </footer>
   <!-- partial -->
   </div>
@endsection
