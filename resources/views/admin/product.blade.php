@extends('admin.index')
@section('content')           
           <div class="content-wrapper">
                 <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card corona-gradient-card">
                                    <div class="card-body py-0 px-0 px-sm-3">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-4 col-sm-3 col-xl-2"
                                            >
                                                <img
                                                    src="../../assets/images/dashboard/Group126@2x.png"
                                                    class="gradient-corona-img img-fluid"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-5 col-sm-7 col-xl-8 p-0"
                                            >
                                                <h4 class="black mb-1 mb-sm-0">
                                                    Want even more features?
                                                </h4>
                                                <p
                                                    class="mb-0 font-weight-normal d-none d-sm-block"
                                                >
                                                    Your account has limited
                                                    access, please complete the
                                                    documents needed so you can
                                                    access all features.
                                                </p>
                                            </div>
                                            <div
                                                class="col-3 col-sm-2 col-xl-2 pl-0 text-center"
                                            >
                                                <span>
                                                    <a
                                                        href="https://www.bootstrapdash.com/product/corona-admin-template/"
                                                        target="_blank"
                                                        class="btn btn-outline-warning btn-danger btn-rounded get-started-btn"
                                                        >Upload documents</a
                                                    >
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header">
                            <li class="page-title" >Product</li>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
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
                                            <h4 class="card-title">
                                                Order Status
                                            </h4>
                                            <div class="row">
                                                <div>
                                                    {{-- <a href="{{route("add_product.addProductView")}}" class="btn btn-danger btn-sm px-3 mr-3 py-2 px-3 rounded">
                                                        Add Products
                                                    </a> --}}
                                                     <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-danger btn-sm px-3 mr-3 py-2 px-3 rounded" data-toggle="modal" data-target="#AddModal"> Add Product</button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="text-light" class="modal-title fs-5" id="deleteModalLabel">
                                                                                Delete Product
                                                                            </h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="forms-sample"  action="{{route('add_product.addProduct')}}" method="post" enctype="multipart/form-data">
                                                                                @csrf 
                                                                                <div class="form-group">
                                                                                  <label for="exampleInputName1" class="blackk">Product Name</label>
                                                                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ old('product_name')}}" name="product_name"/>
                                                                                  <span style="color:red;">
                                                                                  @error('product_name') {{ $message }}
                                                                                  @enderror</span>
                                                                                  <span class="gray">Do not exceed 20 characters when entering the product name.</span>
                                                                                </div>
                                                                                <div class="row">
                                                                                  <div class="col form-group">
                                                                                    <label for="exampleSelectGender" class="blackk">Category</label>
                                                                                    <select class="form-control"  id="exampleSelectGender" style="border: 1px solid" name="category">
                                                                                      <option></option>
                                                                                      <option>Chicken</option>
                                                                                      <option>Pork</option>
                                                                                    </select>
                                                                                    <span style="color:red;">
                                                                                      @error('category') {{ $message }}
                                                                                      @enderror</span>
                                                                                  </div>
                                                                                  <div class="col form-group">
                                                                                    <label for="exampleSelectGender" class="blackk">Type</label>
                                                                                    <select class="form-control" id="exampleSelectGender"style="border: 1px solid" name="type">
                                                                                      <option></option>
                                                                                      <option>Fried Chicken</option>
                                                                                      <option>Chicken Soup</option>
                                                                                    </select>
                                                                                    <span style="color:red;">
                                                                                      @error('type') {{ $message }}
                                                                                      @enderror</span>
                                                                                  </div>
                                                                                </div>
                                                      
                                                                                <div class="form-group">
                                                                                  <label for="exampleTextarea1" class="blackk">Description</label>
                                                                                  <textarea class="form-control"id="exampleTextarea1"rows="4" name="description"></textarea>
                                                                                  <span style="color:red;">
                                                                                    @error('description') {{ $message }}
                                                                                    @enderror</span>
                                                                                  <span class="gray">Do not exceed 100 characters when entering the product details.</span>
                                                                                </div>
                                                                              
                                                                            
                                                                           
                                                      
                                                                                <div class="form-group">
                                                                                  <div class="file-loading">
                                                                                    <input type="file" value="{{old('product_image')}}" name="product_image"/>
                                                                                    <span style="color:red;">
                                                                                      @error('product_image') {{ $message }}
                                                                                      @enderror</span>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                  <div class="col-md">
                                                                                    <label for="exampleInputName1" class="blackk">Price</label>
                                                                                    <input type="text"class="form-control" id="exampleInputName1" value="{{ old('price')}}" name="price"/>
                                                                                    <span style="color:red;">
                                                                                      @error('price') {{ $message }}
                                                                                      @enderror</span>
                                                                                  </div>
                                                                                  <div class="col-md">
                                                                                    <label for="exampleInputName1" class="blackk">Stock</label>
                                                                                    <input type="text"class="form-control" id="exampleInputName1" value="{{old('stock')}}" name="stock"/>
                                                                                    <span style="color:red;">
                                                                                      @error('stock') {{ $message }}
                                                                                      @enderror</span>
                                                                                  </div>
                                                                                  <div class="col-md">
                                                                                    <label for="exampleSelectGender" class="blackk">Status</label>
                                                                                    <select  class="form-control" id="exampleSelectGender" style="border: 1px solid" name="status">
                                                                                      <option></option>
                                                                                      <option>Active</option>
                                                                                      <option>Disabled</option>
                                                                                    </select>
                                                                                    <span style="color:red;">
                                                                                      @error('status') {{ $message }}
                                                                                      @enderror</span>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="text-lg-left text-center">
                                                                                  <button type="submit" class="btn btn-primary btn-lg mr-2 mt-4 py-2 px-5">
                                                                                    Submit
                                                                                  </button>
                                                                                  <button class="btn btn-dark btn-lg mt-4 py-2 px-5" data-dismiss="modal">
                                                                                    Cancel
                                                                                  </button>
                                                                                </div>
                                                                              </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>
                                                

                                                
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="myProduct">
                                                <thead class="table-danger">
                                                    <tr>
                                                        <th>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"/>
                                                                </label>
                                                            </div>
                                                        </th>
                                                        <th>Product Name</th>
                                                        <th>Stock</th>
                                                        <th>Product Cost</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    @foreach($products as $key => $data)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label"> <input type="checkbox"class="form-check-input"/></label>
                                                            </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <img src="{{ asset('product_images/'.$data->product_image)}}" alt="image" class="img-fluid" style=" height: 60px; width: 70px; border-radius: 2px;"/>
                                                            <span class="pl-2">{{$data ->product_name}}</span>
                                                        </td>
                                                        <td>{{$data ->stock}}</td>
                                                        <td>{{$data ->price}}</td>
                                                        <td>Dashboard</td>
                                                        <td>
                                                            @if ($data->status =='Active')
                                                            <button class="btn btn-success" data-target="#Cancelled">
                                                              Active
                                                            </button>
                                                          @elseif($data->status=='Disabled')
                                                            <button class="btn btn-warning" data-target="#Cancelled">
                                                              Disabled
                                                            </button>
                                                          @else
                                                          
                                                          @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                {{-- <a href="product/update/{{ $data ->product_id}}" class="badge badge-outline-success mr-3">
                                                                    Edit Product 
                                                                </a> --}}
                                                                 <button href="" data-id={{$data->product_id}} class="updateButton badge badge-outline-success mr-3" id="updateButton">
                                                                    Edit Product 
                                                                 </button>
                                                            <!-- Button trigger modal -->
                                                            {{-- <button type="button" class="btn btn-success updateButton" data-toggle="modal" data-id={{$data->product_id}} data-target="#EditModal"> Remove Product</button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="text-light" class="modal-title fs-5" id="deleteModalLabel">
                                                                                Delete Product
                                                                            </h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div
                                                                            class="modal-body">
                                                                            <form class="forms-sample" action="{{route('product.updateProductInfo')}}" method="post" enctype="multipart/form-data">
                                                                                @csrf 
                                                                                <input type="hidden" value="" name="product_id">
                                                                                <div class="form-group">
                                                                                  <label for="exampleInputName1" class="blackk">Product Name</label>
                                                                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="" name="product_name"/>
                                                                                  <span class="gray">Do not exceed 20 characters when entering the product name.</span>
                                                                                </div>
                                                                                <div class="row">
                                                                                  <div class="col form-group">
                                                                                    <label for="exampleSelectGender" class="blackk">Category</label>
                                                                                    <select class="form-control"  id="exampleSelectGender" style="border: 1px solid" name="category">
                                                                                      <option></option>
                                                                                      <option >Chicken</option>
                                                                                      <option>Pork</option>
                                                                                    </select>
                                                                                  </div>
                                                                                  <div class="col form-group">
                                                                                    <label for="exampleSelectGender" class="blackk">Type</label>
                                                                                    <select class="form-control" id="exampleSelectGender"style="border: 1px solid" name="type">
                                                                                      <option></option>
                                                                                      <option>Fried Chicken</option>
                                                                                      <option>Chicken Soup</option>
                                                                                    </select>
                                                                                  </div>
                                                                                </div>
                                                      
                                                                                <div class="form-group">
                                                                                  <label for="exampleTextarea1" class="blackk">Description</label>
                                                                                  <textarea class="form-control"id="exampleTextarea1"rows="4" placeholder="" name="description"></textarea>
                                                                                  <span class="gray">Do not exceed 100 characters when entering the product details.</span>
                                                                                </div>
                                                                              
                                                                            
                                                                           
                                                      
                                                                                <div class="form-group">
                                                                                  <div class="file-loading">
                                                                                    <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1" data-theme="fa5" value="" name="product_image"/>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                  <div class="col-md">
                                                                                    <label for="exampleInputName1" class="blackk">Price</label>
                                                                                    <input type="text"class="form-control" id="exampleInputName1" placeholder="" value="" name="price"/>
                                                                                  </div>
                                                                                  <div class="col-md">
                                                                                    <label for="exampleInputName1" class="blackk">Stock</label>
                                                                                    <input type="text"class="form-control" id="exampleInputName1" placeholder="" value="" name="stock"/>
                                                                                  </div>
                                                                                  <div class="col-md">
                                                                                    <label for="exampleSelectGender" class="blackk">Status</label>
                                                                                    <select  class="form-control" id="exampleSelectGender" style="border: 1px solid" name="status">
                                                                                      <option></option>
                                                                                      <option>Active</option>
                                                                                      <option>Disabled</option>
                                                                                    </select>
                                                                                  </div>
                                                                                </div>

                                                                                <div class="text-lg-left text-center">
                                                                                  <button type="submit" class="btn btn-primary btn-lg mr-2 mt-4 py-2 px-5 updateButton">
                                                                                    Update
                                                                                  </button>
                                                                                  <button class="btn btn-dark btn-lg mt-4 py-2 px-5">
                                                                                    Cancel
                                                                                  </button>
                                                                                </div>

                                                                              </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"> Remove Product</button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h6 class="text-light" class="modal-title fs-5" id="deleteModalLabel">
                                                                                    Delete Product
                                                                                </h6>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body">
                                                                                Are you sure you want to delete this product?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                                                    Close
                                                                                </button>
                                                                                <a href="product/remove/{{ $data ->product_id}}" type="button"class="btn btn-danger">Remove product</a>
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
                                        <div>
                                            <table id="sample">
                                                <tr>
                                                  <th>Person 1</th>
                                                  <th>Person 2</th>
                                                  <th>Person 3</th>
                                                </tr>
                                                <tr>
                                                  <td>Emil</td>
                                                  <td>Tobias</td>
                                                  <td>Linus</td>
                                                </tr>
                                                <tr>
                                                  <td>16</td>
                                                  <td>14</td>
                                                  <td>10</td>
                                                </tr>
                                              </table>
                                        </div>
                                        {{-- <ul class="pagination pt-2 align-items-center justify-content-center justify-content-sm-end">
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
                                        </ul> --}}
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
                                >Copyright © bootstrapdash.com 2020</span
                            >
                            <span
                                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                            >
                                Free
                                <a
                                    href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                    target="_blank"
                                    >Bootstrap admin templates</a
                                >
                                from Bootstrapdash.com</span
                            >
                        </div>

                        {{-- <script>
                            $(document).ready(function () {
                               $('.updateButton').click(function () {
                                    var userid = $(this).data('id');
                                    alert(userid)
                               });
                            });
                
                        </script> --}}

                       

                        {{-- <script>
                            $(document).ready(function () {
                                $("#EditModal").on("show.bs.modal", function (e) {
                                    var id = $(e.relatedTarget).data('target-id');
                                    $('#exampleInputName1').val(id);
                                });
                            });
                
                </script> --}}

                    </footer>
                    <!-- partial -->
                </div>
           @endsection