<?php

namespace App\Http\Controllers;
use App\Models\tbl_product;
use App\Models\tbl_voucher;
use App\Models\tbl_category;
use Illuminate\Http\Request;
use App\Models\tbl_inventory;
use App\Models\tbl_activitylog;
use App\Models\tbl_admin_role;
use App\Models\tbl_merchant_info;
use Illuminate\Support\Facades\DB;
use App\Models\tbl_merchant_account;
use App\Models\tbl_merchant_document;
use App\Models\tbl_orders;
use App\Models\tbl_partner_accounts;
use App\Models\tbl_transaction;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; // to retrieve current Date

class Admin_product extends Controller
{
    public function dashboard(){
       $totalOrders = tbl_orders::where('restaurant_id', Session::get('loginID'))
       ->count();
       
       $productSold = tbl_orders::where('restaurant_id', Session::get('loginID'))
       ->count('product_id');
       
       $totalRevenue = tbl_orders::where('restaurant_id', Session::get('loginID'))
       ->sum('total');
      
       $totalProduct = tbl_product::where('merchant_id', Session::get('loginID'))
       ->count('product_id');
    
        $allProduct = tbl_product::where('merchant_id', Session::get('loginID'))
        ->get();
        
        
    if($allProduct){
    
    // GET DATE AND TOTAL IN CHART
    $date = tbl_orders::selectRaw('date, sum(total) as totals')
    ->where('restaurant_id', Session::get('loginID'))
    ->groupBy('date')
    ->get();

    $day = [];
    $total = [];
    
     foreach($date as $dates){
            $timestamp = strtotime($dates->date);
            $day[] = date('M', $timestamp).' '. date('d', $timestamp).' ' .date('Y', $timestamp);
            $total[] = $dates->totals; 
        }
   
        // !GET DATE AND TOTAL IN CHART 
   
    // GET STATUS IN CHART
    $status = tbl_orders::selectRaw('status, count(status) as order_counts')
    ->groupBy('status')
    ->where('restaurant_id', Session::get('loginID'))
    ->get();
    
    $order_status = [];
    $order_count = [];
    
    foreach($status as $stat){
         $order_status[] = $stat->status;
         $order_count[] = $stat->order_counts;
        }

     // !GET STATUS IN CHART

        $Data = tbl_product::join('tbl_orders', 'tbl_product.product_id', '=', 'tbl_orders.product_id')
        ->where('tbl_orders.restaurant_id', Session::get('loginID'))
        ->selectRaw('tbl_product.product_id, tbl_product.product_name, tbl_product.category_name, sum(tbl_orders.total) as totals, count(tbl_orders.product_id) as product_sold')
        ->groupBy('tbl_product.product_id', 'tbl_product.product_name', 'tbl_product.category_name')
        ->orderBy('product_sold', 'desc')
        ->get();
    
    $products=[];
    foreach($Data as $prod){
        $products[] = $prod;
        
    }
    return view('admin.dashboard',['totalOrders' => $totalOrders, 'productSold' => $productSold, 'totalRevenue' => $totalRevenue, 'totalProduct' => $totalProduct,], compact('products', 'day', 'total', 'order_status', 'order_count', 'allProduct'));
    }
   
    }
    
   public function logout(){
    if(Session::has('loginID')){
        $user = tbl_partner_accounts::where('merchant_id', Session::get('loginID'))
        ->first();
        if($user)
        {
            $log = new tbl_activitylog();
            $log->merchant_id = $user->merchant_id;
            $log->email = $user->email;
                if(Session::get('AdminRole')){
                        $log->name = Session::get('AdminRole');
                }
                else{
                    $log->name = Session::get('Admin');
                }
            
            $log->description = 'Has Log Out';
            $res = $log->save();
            if($res){
                Session::pull('loginID');
                Session::pull('AdminRole');
                Session::pull('Admin');
                Cookie::queue(Cookie::forget('partner_email'));
                Cookie::queue(Cookie::forget('partner_password'));  
                return redirect('/rider_login');
            }
        }
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
        $product->category_id =$rProduct->category_id;
        $product->category_name =$rProduct->category_name;
        $product->calories =$rProduct->calories;
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
        $product->category_id =$rProduct->category_id;
        $product->category_name =$rProduct->category_name;
        $product->calories =$rProduct->calories;
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

    // public function updateProduct($id)
    // {
    //     $update = DB::table('tbl_product')->where('product_id','=', $id)->first();
    
        
    //     $this->product_name =$update->product_name;


    //   //return view('admin.product', ['update' => $update]);
    // }

    public  function updateProductInfo(Request $request)
    {
        $affected = DB::table('tbl_product')->where('product_id', $request->product_id);
              
        if($request->product_image != ''){        
            // $path = public_path().'/product_images';
  
            //upload new file
            $prod_image = $request->file('product_image')->store('product_images', 's3', ['visibility', 'public']);
            $image_p = Storage::disk('s3')->url($prod_image);
            
            // $file = $request->product_image;
            // $filename = $file->getClientOriginalName();
            // $file->move($path, $filename);
            $category=$request->category;
            $category_parts = explode('|', $category);

            $resss=$affected->update(['product_name' => $request->product_name,'price' => $request->price,'price' => $request->price,'category_id' => $category_parts[0], 'category_name' => $category_parts[1], 'calories' => $request->calories, 'ingredients' => $request->ingredients, 'stock' => $request->stock,'status' => $request->status,'description' => $request->description,'product_image'=> $image_p],
              
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
            $category=$request->category;
            $category_parts = explode('|', $category);

            $resss=$affected->update(['product_name' => $request->product_name,'price' => $request->price,'category_id' => $category_parts[0], 'category_name' => $category_parts[1], 'calories' => $request->calories, 'ingredients' => $request->ingredients, 'stock' => $request->stock,'status' => $request->status,'description' => $request->description],  
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
//
    public function addProduct(Request $request)
    {

              $addProd=new tbl_product();

            if ($request->hasFile('product_image')) 
            {
                $prod_image = $request->file('product_image')->store('product_images', 's3', ['visibility', 'public']);

                $image_p = Storage::disk('s3')->url($prod_image);

                $addProd->merchant_id = session('loginID');
                $addProd->product_name =$request->product_name;
                $addProd->stock = $request->stock;
                $addProd->product_image =$image_p;
                $addProd->price = $request->price;
                $addProd->calories = $request->calories;
                $category=$request->category;
                $category_parts = explode('|', $category);
                $addProd->category_id = $category_parts[0];
                $addProd->category_name = $category_parts[1];
                $addProd->status = $request->status;
                // $addProd->tags=$request->tags_category;
                $addProd->description = $request->description;
                $addProd->ingredients= $request->ingredients;
            }

            $addProd->save();
            
            return redirect('product');
    }


    //CATEGORY
    public function addCategory(Request $request)
    {
        $addCategory = new tbl_category();

        $addCategory->main_category = $request->categoryName;
        $addCategory->description = $request->description;
        $addCategory->merchant_id = session('loginID');

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
                
        $resss=$affected->update(['status' => 'Ready for pick up'],);
              
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
        $orderKeys = tbl_orders::select('order_key')->distinct()->where('restaurant_id', session('loginID'))->pluck('order_key')->toArray();
        $orders = collect();
        foreach ($orderKeys as $orderKey){
            $order = tbl_orders::whereIn('order_key', $orderKey)->where('restaurant_id', session('loginID'))->get();
            $orders->push($order);
            continue;
        }
        dd($orders);
        $orders = $orders->sortByDesc('order_id');

        $TotalOrders = DB::table('tbl_orders')->where('restaurant_id', '=', session('loginID'))->count();
        $PendingOrders = DB::table('tbl_orders')->where([['status','Pending'],['restaurant_id', '=', session('loginID')]])->count();
        $PreparingOrders = DB::table('tbl_orders')->where([['status','Ready to pick up'],['restaurant_id', '=', session('loginID')]])->count();
        $DeliveringOrders = DB::table('tbl_orders')->where([['status','Delivering'],['restaurant_id', '=', session('loginID')]])->count();
        $DeliveredOrders = DB::table('tbl_orders')->where([['status','Delivered'],['restaurant_id', '=', session('loginID')]])->count();
       

        return view('admin.admin_orders',['orders' => $orders, 'TotalOrders' => $TotalOrders, 'PendingOrders' => $PendingOrders, 'PreparingOrders' => $PreparingOrders, 'DeliveringOrders' => $DeliveringOrders, 'DeliveredOrders' => $DeliveringOrders]);

    }
    public function OrderPending(){
        $pending_order = DB::table('tbl_orders')->where([['status','=', 'Pending'],['restaurant_id', '=', session('loginID')]])->get();
         $pending_order = $pending_order->sortByDesc('order_id');

        return view ('admin.admin_orderpending', ['pending_order' => $pending_order]);
    }
    public function OrderPreparing(){
        $preparing_order = DB::table('tbl_orders')->where([['status','=', 'Ready for pick up'],['restaurant_id', '=', session('loginID')]])->get();
        $preparing_order = $preparing_order->sortByDesc('order_id');

        return view ('admin.admin_orderpreparing', ['preparing_order' => $preparing_order]);
    }
    public function OrderDelivering(){
        $delivering_order = DB::table('tbl_orders')->where([['status','=', 'Delivering'],['restaurant_id', '=', session('loginID')]])->get();
        $delivering_order = $delivering_order->sortByDesc('order_id');
        
        return view ('admin.admin_orderdelivering', ['delivering_order' => $delivering_order]);
    }

    public function OrderDelivered(){
        $delivered_order = DB::table('tbl_orders')->where([['status','=', 'Delivered'],['restaurant_id', '=', session('loginID')]])->get();
        $delivered_order = $delivered_order->sortByDesc('order_id');

        return view ('admin.admin_orderdelivered', ['delivered_order' => $delivered_order]);
    }

// VOUCHER 
//VIEW
    public function VoucherIndex(){
        $voucher = DB::table('tbl_voucher')->where('merchant_id', '=', session('loginID'))->get();

        $voucherCount = DB::table('tbl_voucher')->where('merchant_id', session('loginID'))->count();
        $EnableVoucher = DB::table('tbl_voucher')->where([['status','Enable'],['merchant_id', '=', session('loginID')]])->count();
        $DisableVoucher = DB::table('tbl_voucher')->where([['status','Disable'],['merchant_id', '=', session('loginID')]])->count();

       
        return view('admin.voucher',['voucher' => $voucher, 'EnableVoucher' => $EnableVoucher, 'DisableVoucher' => $DisableVoucher, 'voucherCount' => $voucherCount]);
    }

    public function EnableVoucher(){
        $enableVoucher = DB::table('tbl_voucher')->where([['status', '=', 'Enable' ],['merchant_id',session('loginID')]])->get();

        return view ('admin.voucher_enable', ['enableVoucher' => $enableVoucher]);
    }

    public function DisableVoucher(){
        $disableVoucher = DB::table('tbl_voucher')->where([['status', '=', 'Disable'],['merchant_id',session('loginID')]])->get();

        return view ('admin.voucher_disable', ['disableVoucher' => $disableVoucher]);
    }
// UPDATE
    public function Enable_Voucher(Request $request) // Update the Voucher Status
    {
        $affected = DB::table('tbl_voucher')->where('voucher_id', $request->voucher_id);
                
        $resss=$affected->update(['status' => 'Enable'],);
              
        return redirect('voucher');
    }

    public function Disable_Voucher(Request $request) // Update the Voucher Status
    {
        $affected = DB::table('tbl_voucher')->where('voucher_id', $request->voucher_id);
                
        $resss=$affected->update(['status' => 'Disable'],);
              
        return redirect('voucher');
    }

    public function Update_Voucher(Request $request) // Update the Voucher 
    {
        $affected = DB::table('tbl_voucher')->where('voucher_id', $request->voucher_id);
                
        $resss=$affected->update(['voucher_name' => $request->voucherName, 'description' => $request->description, 'discount' => $request->discount, 'exp_date' => $request->expDate],);
              
        return redirect('voucher');
    }
//ADD
    public function addVoucher(Request $request)
    {
       
        $addVoucher = new tbl_voucher();

        $addVoucher->merchant_id = session('loginID');
        $addVoucher->voucher_name = $request->voucherName;
        $addVoucher->voucher_code =  $quickpass = substr( str_shuffle( str_repeat( 'abcdefghijklmnopqrstuvwxyz0123456789', 10 ) ), 0, 10 ); //Generate default codes
        $addVoucher->description = $request->description;
        $addVoucher->discount = $request->discount;
        $addVoucher->total_claimed = '0';
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

    public function ClaimedVoucher(Request $request){
        $claimedVoucher = DB::table('tbl_claimed')->where('voucher_code', $request->voucher_code)->get();

        return view ('admin.voucher_claimed', ['claimedVoucher' => $claimedVoucher]);
    }

    public function History()
    {
        $history = tbl_orders::where('status', 'Delivered')->where('restaurant_id', Session::get('loginID'))->with('transaction_details')->get();
        return view('admin.admin_history', ['history' => $history]);
    }

    public function ActivityLog(){

        $log = tbl_activitylog::all()
        ->where('merchant_id', Session::get('loginID'));

        return view('admin.admin_log', compact('log'));
    }

    public function AdminAccount(){
        $id = Session::get('loginID');

        $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
        ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
        ->join('tbl_accepted_merchant', 'tbl_merchant_account.merchant_id', '=', 'tbl_accepted_merchant.merchant_id')
        ->where('tbl_merchant_account.merchant_id', $id)
        ->limit(1)
        ->get();

        $product = tbl_product::where('merchant_id', $id)
        ->get();
        return view('admin.admin_account', compact('Data', 'product'));
    }

    public function ChangePass(Request $request){
        $request->validate([
        'old_password' => 'required|min:8|max:50',
        'password' => [
            'required', 'confirmed',
            Password::min(8)->letters()->numbers()->symbols()
            ],
            'password_confirmation' => 'required'
        ]);

        $pass = tbl_merchant_account::where('merchant_id', Session::get('loginID'))
        ->value('password');
    
        if(Hash::check($request->old_password, $pass)){
       
        $res = tbl_merchant_account::where('merchant_id', Session::get('loginID'))
        ->update([
            'password' =>  bcrypt($request->password_confirmation)
        ]);
        if($res){
            $request->session()->put('success', 'Password Updated');
            return back();
        }
      
      }
      else{
         $request->session()->put('fail', 'Old password does not match');
            return back();
      }
    }
    public function ChangeEmail(Request $request){
        
         $request->validate([
        'new_email' => 'required|email|unique:tbl_merchant_account,email',
        'confirm_email' => 'required|email'
       ]);
       
       if($request->new_email == $request->confirm_email){
        $res = tbl_partner_accounts::where('merchant_id', Session::get('loginID'))
        ->update([
            'email' => $request->confirm_email
        ]);
        if($res){
            $request->session()->put('success', 'Email Updated');
            return back();
        }
       }
       else{
          $request->session()->put('fail', 'Email does not match');
            return back();
       }

    }

    public function tmpUpload(Request $request)
    {
        if($request->hasFile('product_image'))
        {
            $image = $request->file('product_image');
            $filename = $image->getClientOriginalName();
            $folder = uniqid('post', true);
            $image->storeAs('posts/tmp/' .$folder, $filename);
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $filename
            ]);
            return $folder;
        }
        return '';
    }

    public function AccountAddIndex(){

        $id = Session::get('loginID');

        $Data = tbl_admin_role::where('merchant_id', $id)
        ->get();
       
        return view('admin.admin_add_account', compact('Data'));
    }

    public function AddAccount(){
        return view('admin.admin_add_email');
    }
    
    public function AddNewAccount(Request $request){
        $request->validate([

            'password' => [
            'required', 'confirmed',
            Password::min(8)->letters()->numbers()->symbols()
            ],
            'password_confirmation' => 'required',
            'status' => 'required',
            'role' => 'required',
             'email' => 'required|email|unique:tbl_rider_account|unique:tbl_merchant_account|unique:tbl_admin_role',
        ]);
        
        $id = Session::get('loginID');
        $document_id = tbl_merchant_document::where('merchant_id', $id)->first();
        $info_id = tbl_merchant_info::where('merchant_id', $id)->first();

        $admin = new tbl_admin_role();
        $admin->merchant_id = $id;
        $admin->merchant_document_id = $document_id->merchant_document_id;
        $admin->merchant_info_id = $info_id->merchantinfo_id;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->status = $request->status;
        $admin->role = $request->role;

        $res = $admin->save();
        
        if($res){
            $request->session()->put('success', 'Account Added');
            return redirect('/admin_add_account');
        }
    }
}