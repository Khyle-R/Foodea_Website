<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\FoodFilter;
use App\Models\tbl_product;

class FoodController extends Controller
{
    public function index(Request $request){
        $filter = new FoodFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return tbl_product::all();
        } else {
            return tbl_product::where($queryItems)->get();
        }
    }
}
