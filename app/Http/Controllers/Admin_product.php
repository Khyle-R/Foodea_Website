<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tbl_inventory;
use App\Models\tbl_product;
use App\Models\tbl_merchant_info;
use App\Models\tbl_partner_accounts;
use App\Models\tbl_category;
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
            'description'=> 'required',
            'product_image' => 'required',
            'price'=> 'required',
            'stock'=> 'required',
            'status'=> 'required',
            'tags_category'=> 'required',
            'ingredients' => 'required'
        ]);


        $addProd = new tbl_product();
       

            if ($request->hasFile('product_image')) 
            {
                
        

                $prod_image = $request->file('product_image');

                $image_p = $prod_image->getClientOriginalName();

                $prod_image->move('product_images', $image_p);

            
            $addProd->merchant_id = "1";
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
            $addProd-> save();
            return redirect('');
        
    }

    public function infoAccount()
    {
        $id=session('loginID');

        $accountInfo = DB::table('tbl_merchant_account')->where('merchant_id','=', $id)->first();
        return view('admin.admin_personalinformation1');
    }

    public function addCategory(Request $request)
    {
        $addCategory = new tbl_category();

        $addCategory->main_category = $request->category_name;
        $addCategory->sub_category = $request->tags_category;
        $addCategory->date = Carbon::now();// to get the current time

        $result=$addCategory->save();

        if($result)
        {
        //return redirect('category');
        
        }else 
        {
            return back()->with('fail','Something went wrong when trying to add');
            //return view('admin.admin_product');
        }
       
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
        return view ('admin.voucher');
    }
    // Order Page
    // Admin order accept!
    public function OrderAccept(){
        return view ('admin.admin_orderaccept');
    }
    public function OrderArchieve(){
        return view ('admin.admin_orderarchieve');
    }
    public function OrderPending(){
        return view ('admin.admin_orderpending');
    }
    public function OrderReview(){
        return view ('admin.admin_orderreview');
    }
}