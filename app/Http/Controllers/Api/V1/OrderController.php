<?php

namespace App\Http\Controllers\Api\V1;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Filters\V1\OrderFilter;
use App\Http\Requests\V1\StoreOrderRequest;

class OrderController extends Controller
{
    public function index(Request $request){
        $filter = new OrderFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            return Order::all();
        } else {
            return Order::where($queryItems)->get();
        }
    }

    public function store(StoreOrderRequest $request){
        return Order::create($request->all());
    }

    public function show(Request $request, Order $order){
        $id = $request->segment(count(request()->segments()));
        return $order::where('order_id', $id)->get();
    }

    public function destroy(Request $request, Order $order){
        $id = $request->segment(count(request()->segments()));
        return $order::where('order_id', $id)->delete();
    }
}
