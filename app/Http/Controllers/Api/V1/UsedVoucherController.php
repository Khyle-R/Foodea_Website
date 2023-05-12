<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\UsedVoucherFilter;
use App\Http\Requests\V1\StoreUsedVoucherRequest;
use App\Models\UsedVoucher;

class UsedVoucherController extends Controller
{
    public function index(Request $request){
        $filter = new UsedVoucherFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return UsedVoucher::with('voucher_details')->get();
        } else {
            return UsedVoucher::with('voucher_details')->where($queryItems)->get();
        }
    }

    public function store(StoreUsedVoucherRequest $request){
        return UsedVoucher::create($request->all());
    }

    public function show(Request $request, UsedVoucher $UsedVoucher){
        $id = $request->segment(count(request()->segments()));
        return $UsedVoucher::where('id', $id)->with('voucher_details')->get();
    }

    // public function destroy(Request $request, tbl_voucher $tbl_voucher){
    //     $id = $request->segment(count(request()->segments()));
    //     return $tbl_voucher::where('voucher_id', $id)->delete();
    // }

    // public function update(UpdateCartRequest $request, tbl_category $tbl_category){
    //     $tbl_category->update($request->all());
    // }
}
