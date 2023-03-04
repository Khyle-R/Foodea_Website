<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\CartFilter;
use App\Http\Requests\V1\StoreCartRequest;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(Request $request){
        $filter = new CartFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return Cart::all();
        } else {
            return Cart::where($queryItems)->get();
        }
    }

    public function store(StoreCartRequest $request){
        return Cart::create($request->all());
    }
}
