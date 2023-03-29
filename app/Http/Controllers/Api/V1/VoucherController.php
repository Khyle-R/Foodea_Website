<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\VoucherFilter;
use App\Models\tbl_voucher;

class VoucherController extends Controller
{
    public function index(Request $request){
        $filter = new VoucherFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return tbl_voucher::all();
        } else {
            return tbl_voucher::where($queryItems)->get();
        }
    }

    // public function store(StoreCartRequest $request){
    //     return Cart::create($request->all());
    // }

    public function show(Request $request, tbl_voucher $tbl_voucher){
        $id = $request->segment(count(request()->segments()));
        return $tbl_voucher::where('voucher_id', $id)->get();
    }

    public function destroy(Request $request, tbl_voucher $tbl_voucher){
        $id = $request->segment(count(request()->segments()));
        return $tbl_voucher::where('voucher_id', $id)->delete();
    }

    // public function update(UpdateCartRequest $request, tbl_category $tbl_category){
    //     $tbl_category->update($request->all());
    // }
}
