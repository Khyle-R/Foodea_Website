<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\RestaurantFilter;
use App\Http\Requests\V1\StoreRestaurantRequest;
use App\Models\tbl_merchant_info;

class RestaurantController extends Controller
{
    public function index(Request $request){
        $filter = new RestaurantFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return tbl_merchant_info::with('documents')->with('account_details')->with('categories')->get();
        } else {
            return tbl_merchant_info::with('documents')->with('account_details')->with('categories')->where($queryItems)->get();
        }
    }

    public function store(StoreRestaurantRequest $request){
        return tbl_merchant_info::create($request->all());
    }

    public function show(Request $request, tbl_merchant_info $tbl_merchant_info){
        $id = $request->segment(count(request()->segments()));
        return $tbl_merchant_info::where('merchant_id', $id)->get();
    }

    public function destroy(Request $request, tbl_merchant_info $tbl_merchant_info){
        $id = $request->segment(count(request()->segments()));
        return $tbl_merchant_info::where('merchant_id', $id)->delete();
    }

    // public function update(UpdateRestaurantRequest $request, tbl_merchant_account $tbl_merchant_account){
    //     $tbl_merchant_account->update($request->all());
    // }
}
