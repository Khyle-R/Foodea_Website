<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tbl_inventory;
use App\Models\tbl_product;
use App\Models\tbl_merchant_info;
use App\Models\tbl_partner_accounts;
use App\Models\tbl_category;
use App\Models\tbl_voucher;
use Carbon\Carbon; // to retrieve current Date
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Admin_product extends Controller
{
    public function dashboard(){
       $totalOrders = DB::table('tbl_orders')->count();
       $productSold = DB::table('tbl_product')->count();
       $totalRevenue = DB::table('tbl_product')->count();
       $totalProduct = DB::table('tbl_product')->count();

    return view('admin.dashboard',['totalOrders' => $totalOrders, 'productSold' => $productSold, 'totalRevenue' => $totalRevenue, 'totalProduct' => $totalProduct]);
    }
    
   public function logout(){
    if(Session::has('loginID')){
        Session::pull('loginID');
        return redirect('/login');
    }

   }

    public function addProductView()
    {
        //
        return view('admin.add_product');
    }
    public function restoreProduct($id)
    {
        $rProduct = DB::table('tbl_inventory')->where('inventory_id','=', $id)->first(); //selected item to delete

        $product = new tbl_product(); //moving the data in inventory   

        $product->product_name =$rProduct->product_name;
        $product->price =$rProduct->price;
        $product->product_image =$rProduct->product_image;
        $product->stock =$rProduct->stock;
        $product->status =$rProduct->status;
        $product->description =$rProduct->description;
        $product->ingredients =$rProduct->ingredients;
        $product->date =$rProduct->date;
        $product->product_id =$rProduct->inventory_id;
        $product->merchant_id =$rProduct->merchant_id;
        $product->category_name =$rProduct->category_name;
        $product->price =$rProduct->price;
        $product->tags =$rProduct->tags;
        
        $res= $product-> save();

        if ($res)
        {
            $dProduct = DB::table('tbl_inventory')->where('inventory_id','=',$id); //deleting product
            $ress=$dProduct->delete();
            if ($ress) {
                return redirect('inventory');
            }
            else {
                return back()->with('fail','Something went wrong when trying to delete');
            }
            
        }else{
            return back()->with('fail', 'Something is wrong');
        }

        
    }

    public function deleteProduct($id)
    {
    
        $dProduct = DB::table('tbl_inventory')->where('inventory_id','=',$id); //deleting product
        $ress=$dProduct->delete();
        if ($ress) {
            return redirect('inventory');
        }
        else {
            return 'something wrong';
        }
    }

    public function removeProduct($id)
    {
        $rProduct = DB::table('tbl_product')->where('product_id','=', $id)->first(); //selected item to delete

        $product = new tbl_inventory(); //moving the data in inventory   

        $product->product_name =$rProduct->product_name;
        $product->price =$rProduct->price;
        $product->product_image =$rProduct->product_image;
        $product->stock =$rProduct->stock;
        $product->status =$rProduct->status;
        $product->description =$rProduct->description;
        $product->ingredients =$rProduct->ingredients;
        $product->date =$rProduct->date;
        $product->inventory_id =$rProduct->product_id;
        $product->merchant_id =$rProduct->merchant_id;
        $product->category_name =$rProduct->category_name;
        $product->price =$rProduct->price;
        $product->tags =$rProduct->tags;
        
        $res= $product-> save();

        if ($res)
        {
            $dProduct = DB::table('tbl_product')->where('product_id','=',$id); //deleting product
            $ress=$dProduct->delete();
            if ($ress) {
                return redirect('product');
            }
            else {
                return 'something wrong';
            }
            
        }else{
            return 'something wrong';
        }
    }

    public function updateProduct($id)
    {
        $update = DB::table('tbl_product')->where('product_id','=', $id)->first();
    
        
        $this->product_name =$update->product_name;


      //return view('admin.product', ['update' => $update]);
    }

    public  function updateProductInfo(Request $request)
    {
        $affected = DB::table('tbl_product')->where('product_id', $request->product_id);
              
        if($request->product_image != ''){        
            $path = public_path().'/product_images';
  
 
            //upload new file
            $file = $request->product_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
  

            $resss=$affected->update(['product_name' => $request->product_name,'price' => $request->price,'stock' => $request->stock,'status' => $request->status,'description' => $request->description,'product_image'=> $filename],
              
            );
            if ($resss) {
                return redirect('product');
            }
            else {
                return back()->with('fail','Something went wrong when trying to delete');
                //return view('admin.admin_product');
            }
        }
        else {
            // if the update dont have new profile upload
            $resss=$affected->update(['product_name' => $request->product_name,'price' => $request->price,'stock' => $request->stock,'status' => $request->status,'description' => $request->description],  
            );
            if ($resss) {
                return redirect('product');
            }
            else {
                return back()->with('fail','Something went wrong when trying to delete');
                //return view('admin.admin_product');
            }
        }
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'product_name'=> 'required',
            'category'=> 'required',
            'type'=> 'required',
            'description'=> 'required',
            'product_image' => 'required',
            'price'=> 'required',
            'stock'=> 'required',
            'status'=> 'required'
        ]);


        $addProd=new tbl_product();

       

            if ($request->hasFile('product_image')) 
            {
                $prod_image = $request->file('product_image');

                $image_p = $prod_image->getClientOriginalName();

                $prod_image->move('product_images', $image_p);

            

                $addProd->merchant_id = session('merchant_id');
                $addProd->product_name =$request->product_name;
                $addProd->stock = $request->stock;
                $addProd->product_image =$image_p;
                $addProd->price = $request->price;
                $addProd->category_name=$request->category;
                $addProd->status = $request->status;
                $addProd->tags=$request->tags_category;
                $addProd->description = $request->description;
                $addProd->ingredients= $request->ingredients;
    
                $currentTime = Carbon::now();// to get the current time
    
                $addProd->date = $currentTime;
               
  
            }

            $addProd->save();
            
            return redirect('product');
        
    }

    public function infoAccount()
    {
        $id=session('loginID');

        $accountInfo = DB::table('tbl_merchant_account')->where('merchant_id','=', $id)->first();
        return view('admin.admin_personalinformation1');
    }

    //CATEGORY
    public function addCategory(Request $request)
    {
        $addCategory = new tbl_category();

        $addCategory->main_category = $request->categoryName;
        $addCategory->description = $request->description;

        $addCategory->save();
        
        return redirect('category');
        
    }

    public function updateCategory(Request $request)
    {


        $affected = DB::table('tbl_category')->where('category_id', $request->category_id);
                
        $resss=$affected->update(['main_category' => $request->categoryName,'description' => $request->description],);
              
        return redirect('category');
    }

    public function deleteCategory($id)
    {
        $dCategory = DB::table('tbl_category')->where('category_id','=',$id); //deleting product
        $ress=$dCategory->delete();

        return redirect('category');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function VoucherIndex(){
        $voucher = DB::table('tbl_voucher')->get();

        return view('admin.voucher', ['voucher' => $voucher]);
    }

    public function addVoucher(Request $request)
    {
       
        $addVoucher = new tbl_voucher();

        $addVoucher->voucher_name = $request->voucherName;
        $addVoucher->voucher_code =  $quickpass = substr( str_shuffle( str_repeat( 'abcdefghijklmnopqrstuvwxyz0123456789', 10 ) ), 0, 10 ); //Generate default codes
        $addVoucher->description = $request->description;
        $addVoucher->exp_date = $request->expDate;
        $addVoucher->status = "Pending";
        
        $addVoucher->save();

        return redirect('voucher');
    }
    
    public function deleteVoucher($id)
    {
        $deleteVoucher = DB::table('tbl_voucher')->where('voucher_id','=',$id); //deleting product
        $deleteVoucher->delete();

        return redirect('voucher');
    }

    public function VoucherReview(request $request)
    {

    }
    
    public function VoucherAccept(request $request)
    {
        
    }

    public function VoucherReject(request $request)
    {
        
    }


    // Order Page
    public function Order_Pending(Request $request)
    {
        $affected = DB::table('tbl_orders')->where('order_id', $request->order_id);
                
        $resss=$affected->update(['status' => 'Pending'],);
              
        return redirect('orderpending');
    }

    public function Order_Preparing(Request $request)
    {
        $affected = DB::table('tbl_orders')->where('order_id', $request->order_id);
                
        $resss=$affected->update(['status' => 'Preparing'],);
              
        return redirect('orderpreparing');
    }

    public function Order_Delivering(Request $request)
    {
        $affected = DB::table('tbl_orders')->where('order_id', $request->order_id);
                
        $resss=$affected->update(['status' => 'Delivering'],);
              
        return redirect('orderdelivering');
    }

    public function Order_Delivered(Request $request)
    {
        $affected = DB::table('tbl_orders')->where('order_id', $request->order_id);
                
        $resss=$affected->update(['status' => 'Delivered'],);
              
        return redirect('orderdelivered');
    }

// Admin order Show the Table
    public function Orders(){
        $orders = DB::table('tbl_orders')->get();

        $TotalOrders = DB::table('tbl_orders')->count();
        $PendingOrders = DB::table('tbl_orders')->where('status','Pending')->count();
        $PreparingOrders = DB::table('tbl_orders')->where('status','Preparing')->count();
        $DeliveringOrders = DB::table('tbl_orders')->where('status','Delivering')->count();
        $DeliveredOrders = DB::table('tbl_orders')->where('status','Delivered')->count();
       

        return view('admin.admin_orders',['orders' => $orders, 'TotalOrders' => $TotalOrders, 'PendingOrders' => $PendingOrders, 'PreparingOrders' => $PreparingOrders, 'DeliveringOrders' => $DeliveringOrders, 'DeliveredOrders' => $DeliveringOrders]);

    }
    public function OrderPending(){
        $pending_order = DB::table('tbl_orders')->where('status','=', 'Pending')->get();

        return view ('admin.admin_orderpending', ['pending_order' => $pending_order]);
    }
    public function OrderPreparing(){
        $preparing_order = DB::table('tbl_orders')->where('status','=', 'Preparing')->get();

        return view ('admin.admin_orderpreparing', ['preparing_order' => $preparing_order]);
    }
    public function OrderDelivering(){
        $delivering_order = DB::table('tbl_orders')->where('status','=', 'Delivering')->get();

        return view ('admin.admin_orderdelivering', ['delivering_order' => $delivering_order]);
    }

    public function OrderDelivered(){
        $delivered_order = DB::table('tbl_orders')->where('status','=', 'Delivered')->get();

        return view ('admin.admin_orderdelivered', ['delivered_order' => $delivered_order]);
    }

}