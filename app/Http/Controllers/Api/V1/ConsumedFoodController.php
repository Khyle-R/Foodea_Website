<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\ConsumedFoodFilter;
use App\Http\Requests\V1\StoreConsumedFoodRequest;
use App\Models\ConsumedFood;

class ConsumedFoodController extends Controller
{
    public function index(Request $request){
        $filter = new ConsumedFoodFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return ConsumedFood::all();
        } else {
            return ConsumedFood::where($queryItems)->get();
        }
    }

    public function store(StoreConsumedFoodRequest $request){
        return ConsumedFood::create($request->all());
    }

    public function show(Request $request, ConsumedFood $ConsumedFood){
        $id = $request->segment(count(request()->segments()));
        return $ConsumedFood::where('id', $id)->get();
    }

    // public function destroy(Request $request, tbl_voucher $tbl_voucher){
    //     $id = $request->segment(count(request()->segments()));
    //     return $tbl_voucher::where('voucher_id', $id)->delete();
    // }

    // public function update(UpdateCartRequest $request, tbl_category $tbl_category){
    //     $tbl_category->update($request->all());
    // }
}
