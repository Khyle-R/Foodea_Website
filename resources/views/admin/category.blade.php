@extends('admin.index')
@section('content')           
<style> /* Style for Tag inside the add Category modal */
    .wrapper{
  width: 496px;
  background: #fff;
  border-radius: 10px;
  padding: 18px 25px 20px;
  box-shadow: 0 0 30px rgba(0,0,0,0.06);
}
.wrapper :where(.title, li, li i, .details){
  display: flex;
  align-items: center;
}
.title img{
  max-width: 21px;
}
.title h2{
  font-size: 21px;
  font-weight: 600;
  margin-left: 8px;
}
.wrapper .content{
  margin: 10px 0;
}
.content p{
  font-size: 15px;
}
.content ul{
  display: flex;
  flex-wrap: wrap;
  padding: 7px;
  margin: 12px 0;
  border-radius: 5px;
  border: 1px solid #a6a6a6;
}
.content ul  li{
  color: #333;
  margin: 4px 3px;
  list-style: none;
  border-radius: 5px;
  background: #F2F2F2;
  padding: 5px 8px 5px 10px;
  border: 1px solid #e3e1e1;
}
.content ul li i{
  height: 20px;
  width: 20px;
  color: #808080;
  margin-left: 8px;
  font-size: 12px;
  cursor: pointer;
  border-radius: 50%;
  background: #dfdfdf;
  justify-content: center;
}
.content ul input{
  flex: 1;
  padding: 5px;
  border: none;
  outline: none;
  font-size: 16px;
}
.wrapper .details{
  justify-content: space-between;
}

</style>
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
                                        Category
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-8 grid-margin">
                                <div class="card" style="max-width: auto">
                                    <div class="p-4">
                                        <h4 class="card-title">
                                            Add Category
                                        </h4>
                                        <div class="row justify-content-sm-between px-3 mb-3">
                                            <div>
                                                <form class="forms-sample"  action="{{route('add_category.addCategory')}}" method="post" enctype="multipart/form-data">
                                                    @csrf 
                                                    <div class="form-group">
                                                        <label for="exampleInputName1" class="blackk">Category Name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ old('product_name')}}" name="category_name"/>
                                                        <input type="hidden" class="form-control" id="tags_category" name="tags_category">
                                                        <span style="color:red;">
                                                        @error('product_name') {{ $message }}
                                                        @enderror</span>
                                                        <span class="gray">Do not exceed 20 characters when entering the product name.</span>
                                                    </div>
                                                    <div class="row justify-content-sm-between px-3 mb-3">
                                                        <div class="wrapper">
                                                            <div class="content">
                                                                <p>Press enter or add a comma after each tag</p>
                                                                <ul id="ul"><input id="input" type="text" spellcheck="false"></ul>
                                                            </div>
                                                            <div class="details">
                                                                <p><span>10</span> tags are remaining</p>
                                                                <button class="btn btn-warning btn-sm px-3 mr-3 py-2 px-3 rounded" type="button">Remove All</button>
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <div class="text-lg-left text-center">
                                                        <button type="button" class="btn btn-danger btn-sm px-3 mr-3 py-2 px-3 rounded updateButton">
                                                            Add
                                                        </button>
                                                    </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-sm-between px-3 mb-3">
                                            <h4 class="card-title">
                                                Category
                                            </h4>
                                            

                                        <div class="table-responsive">
                                            <table id="example" class="table" style="width:100%">
                                                <thead class="table-danger">
                                                    <tr>
                                                        <th>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"/>
                                                                </label>
                                                            </div>
                                                        </th>
                                                        <th>Category Name</th>
                                                        <th>Sub Category</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    @foreach($category as $key => $data)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label"> <input type="checkbox"class="form-check-input"/></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{$data->main_category}}
                                                        </td>
                                                        <td id="S">

                                                            <input type="text" id="category_sub" value="{{$data->sub_category}}">
                                                            <h3 id="button"></h3>
                                                        </td>
                                                        <td>
                                                            
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

                        <script>
                            $(document).ready(function () { //this Jquery when you click the add button the type of the button become submit
                               $('.updateButton').click(function () {
                                    $('.updateButton').attr('type', 'Submit');
                               });
                            });
                
                        </script>
                        
                       
                       
                        {{-- <script>
                            $(document).ready(function () {
                                $("#EditModal").on("show.bs.modal", function (e) {
                                    var id = $(e.relatedTarget).data('target-id');
                                    $('#exampleInputName1').val(id);
                                });
                            });
                
                </script> --}}

              <script>
            const ul = document.querySelector("#ul"), 
            input = document.querySelector("#input"), // input of tags
            tagNumb = document.querySelector(".details span"),
            td = document.querySelector("td");
            let maxTags = 10,
            tags = []; // array for tags
            
            countTags();
            createTag();
            display_tags();
            gettingArray();
            
            function countTags(){ // count tags to know the limits of arrays
                input.focus();
                tagNumb.innerText = maxTags - tags.length;
                
            }
            function gettingTags(gTag) {
                document.getElementById('tags_category').value = gTag; // set the value of the input
                console.log(gTag);
            }
            function createTag(){
                ul.querySelectorAll("li").forEach(li => li.remove());
                tags.slice().reverse().forEach(tag =>{
                    let liTag = `<li>${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li>`;
                    ul.insertAdjacentHTML("afterbegin", liTag);

                    var tagString = JSON.stringify(tags); // convert the array into variable
                    gettingTags(tagString); 
                });
                countTags();
            }
            function remove(element, tag){ // remove tags
                let index  = tags.indexOf(tag);
                tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
                element.parentElement.remove();
                countTags();
            }
            function addTag(e){
                if(e.key == "Enter"){ // when you click space the tag will add
                    let tag = e.target.value.replace(/\s+/g, ' ');
                   
                    if(tag.length > 1 && !tags.includes(tag)){
                        if(tags.length < 10){
                            tag.split(',').forEach(tag => {
                                tags.push(tag);
                                createTag();
                            });
                        }
                    }
                    e.target.value = "";
                }
            }
            input.addEventListener("keyup", addTag);
            const removeBtn = document.querySelector(".details button");
            removeBtn.addEventListener("click", () =>{
                tags.length = 0;
                ul.querySelectorAll("li").forEach(li => li.remove());
                countTags();
            });
//------------------------------------------------------------------------------------------------------------
           
                function display_tags(){ //Display tags to the Table
                    let tags=document.getElementById('category_sub').value;
                    console.log(tags);
                    document.getElementById('button').innerText ='hello';
                    //Ntags=JSON.parse(tags);// need to parse the data from the table to become an array again

                    //Ntags.forEach(gettingArray); // pass the array  to the other function 
                }
                function gettingArray(item){
                    let items =item
                    console.log(items);
                    
                    //let LTag = `<li>${items} <button></button></li>`;
                    //td.insertAdjacentHTML("afterbegin", LTag);
                }
              </script>


                    </footer>
                    <!-- partial -->
                </div>
                
           @endsection