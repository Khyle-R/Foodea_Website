<?php

namespace App\Http\Controllers\Api\V1;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Filters\V1\OrderFilter;
use App\Http\Requests\V1\StoreOrderRequest;
use App\Http\Requests\V1\UpdateOrderRequest;

class OrderController extends Controller
{
    public function index(Request $request){
        $filter = new OrderFilter();
        $queryItems = $filter->transform($request);

        if (!isset($queryItems)||count($queryItems) == 0 ) {
            $order_details = collect();
            $order_keys = Order::select('order_key')->distinct()->get();

            foreach($order_keys as $order_key){
                $data = collect();
                $value = $order_key->order_key;
                if(!$value == '' || !$value == NULL){
                    $data->put('order_key', $value);
                    
                    $dateToday = date('Y-m-d h:i:s');
                    $query = Order::where('order_key', $value)->with('product_details')->with('user_details')->with('restaurant_details')->where('date', 'like', $dateToday . '%');
                    
                    $totalPrice = 0;
                    foreach($query->get() as $q){
                        $totalPrice = $totalPrice + $q->total;
                    }
                    $data->put('order_totalPrice', $totalPrice);

                    if(!$query->count() == 0){
                        $data->put('order_details', $query->get());
                    } else {
                        continue;
                    }
                } else {
                    continue;
                }
                $order_details->push($data);
            }
            return $order_details;
            

            // return Order::whereHas('product_details')->whereHas('user_details')->whereHas('restaurant_details')->with('product_details')->with('user_details')->with('restaurant_details')->groupBy(function($user) {
            //     return $user->post->groupBy('order_key');
            // });
        } else {

            $order_details = collect();
            $order_keys = Order::select('order_key')->distinct()->get();

            foreach($order_keys as $order_key){
                $data = collect();
                $value = $order_key->order_key;
                if(!$value == '' || !$value == NULL){
                    $data->put('order_key', $value);
                    $query = Order::where('order_key', $value)->with('product_details')->with('user_details')->with('restaurant_details')->where($queryItems);
                    
                    $totalPrice = 0;
                    foreach($query->get() as $q){
                        $totalPrice = $totalPrice + $q->total;
                    }
                    $data->put('order_totalPrice', $totalPrice);

                    if(!$query->count() == 0){
                        $data->put('order_details', $query->get());
                    } else {
                        continue;
                    }
                    
                } else {
                    continue;
                }
                $order_details->push($data);
            }

            return $order_details;

            // return Order::whereHas('product_details')->whereHas('user_details')->whereHas('restaurant_details')->with('product_details')->with('user_details')->with('restaurant_details')->where($queryItems)->get();
        }
    }

    public function store(StoreOrderRequest $request){
        return Order::create($request->all());
    }

    public function show(Request $request, Order $order){
        $id = $request->segment(count(request()->segments()));
        return $order::with('product_details')->where('order_id', $id)->get();
    }

    public function destroy(Request $request, Order $order){
        $id = $request->segment(count(request()->segments()));
        return $order::where('order_id', $id)->delete();
    }

    public function update(UpdateOrderRequest $request, Order $order){
        $order->update($request->all());
    }
}
