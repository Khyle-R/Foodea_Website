<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\FoodFilter;
use App\Models\tbl_product;
use App\Http\Requests\V1\StoreFoodRequest;
use App\Http\Requests\V1\UpdateFoodRequest;

class FoodController extends Controller
{
    public function index(Request $request){
        $filter = new FoodFilter();
        $queryItems = $filter->transform($request);

        if(is_null($request->limit)){
            if (!isset($queryItems)||count($queryItems) == 0 ) {
                return tbl_product::all();
            } else {
                return tbl_product::where($queryItems)->get();
            }
        } else {
            $limit = $request->limit;
            if (!isset($queryItems)||count($queryItems) == 0 ) {
                return tbl_product::limit($limit)->get();
            } else {
                return tbl_product::where($queryItems)->limit($limit)->get();
            }
        }
    }

    public function store(StoreFoodRequest $request){
        return tbl_product::create($request->all());
    }

    public function show(Request $request, tbl_product $tbl_product){
        $id = $request->segment(count(request()->segments()));
        return $tbl_product::where('product_id', $id)->get();
    }

    public function update(UpdateFoodRequest $request, tbl_product $tbl_product){
        $tbl_product->update($request->all());
    }
}
