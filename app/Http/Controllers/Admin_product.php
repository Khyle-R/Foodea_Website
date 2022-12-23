<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tbl_inventory;
use App\Models\tbl_product;
use App\Models\tbl_merchant_info;
use App\Models\tbl_partner_accounts;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Admin_product extends Controller
{
    public function dashboard(){

        $logIndata = array();
        if(Session::has('loginID')){
            $logIndata = tbl_partner_accounts::where('merchant_id', '=', Session::get('loginID'))->first();
        }
        return view('admin.index', compact('logIndata'));
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
        $product->date =$rProduct->date;
        $product->product_id =$rProduct->inventory_id;
        $product->merchant_id =$rProduct->merchant_id;
        $product->category_id =$rProduct->category_id;
        $product->price =$rProduct->price;
        
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
        $product->date =$rProduct->date;
        $product->inventory_id =$rProduct->product_id;
        $product->merchant_id =$rProduct->merchant_id;
        $product->category_id =$rProduct->category_id;
        $product->price =$rProduct->price;
        
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
    
      return view('admin.update_product', ['update' => $update]);
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
              //['price' => $request->price],
              //'price' => $request->price],
              //['price' => $request->price],
              //['description' => $request->description]
            );
            if ($resss) {
                return redirect('product');
            }
            else {
                return back()->with('fail','Something went wrong when trying to delete');
            }
        }
    }

    public function addProduct(Request $request)
    {
        $addProd=new tbl_product();

       

            if ($request->hasFile('product_image')) 
            {
                $prod_image = $request->file('product_image');

                $image_p = $prod_image->getClientOriginalName();

                $prod_image->move('product_images', $image_p);

            

            $addProd->product_name =$request->product_name;
            $addProd->price = $request->price;
            $addProd->product_image =$image_p;
            $addProd->stock = $request->stock;
            $addProd->status = $request->status;
            $addProd->description = $request->description;
            $addProd->date = "2020:02:18";
            $addProd->product_id = "000";
            $addProd->merchant_id = "111";
            $addProd->category_id = "222";
            $addProd->price = $request->price;
  
            }

            $addProd->save();
            
            return redirect('product');
        
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
}