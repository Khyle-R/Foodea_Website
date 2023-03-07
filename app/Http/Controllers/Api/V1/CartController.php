<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\V1\CartFilter;
use App\Http\Requests\V1\StoreCartRequest;
use App\Http\Requests\V1\UpdateCartRequest;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(Request $request){
        $filter = new CartFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return Cart::with('product_details')->get();
        } else {
            return Cart::with('product_details')->where($queryItems)->get();
        }
    }

    public function store(StoreCartRequest $request){
        return Cart::create($request->all());
    }

    public function show(Request $request, Cart $cart){
        $id = $request->segment(count(request()->segments()));
        return $cart::with('product_details')->where('id', $id)->get();
    }

    public function destroy(Request $request, Cart $cart){
        $id = $request->segment(count(request()->segments()));
        return $cart::where('id', $id)->delete();
    }

    public function update(UpdateCartRequest $request, Cart $cart){
        $cart->update($request->all());
    }
}
