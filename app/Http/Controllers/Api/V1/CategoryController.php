<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\CategoryFilter;
use App\Models\tbl_category;

class CategoryController extends Controller
{
    public function index(Request $request){
        $filter = new CategoryFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return tbl_category::all();
        } else {
            return tbl_category::where($queryItems)->get();
        }
    }

    // public function store(StoreCartRequest $request){
    //     return Cart::create($request->all());
    // }

    public function show(Request $request, tbl_category $tbl_category){
        $id = $request->segment(count(request()->segments()));
        return $tbl_category::where('merchant_id', $id)->get();
    }

    public function destroy(Request $request, tbl_category $tbl_category){
        $id = $request->segment(count(request()->segments()));
        return $tbl_category::where('merchant_id', $id)->delete();
    }

    // public function update(UpdateCartRequest $request, tbl_category $tbl_category){
    //     $tbl_category->update($request->all());
    // }
}
