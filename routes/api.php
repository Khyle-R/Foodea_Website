<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('foods', FoodController::class);
    Route::apiResource('app_users', UserController::class);
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('favorites', FavoritesController::class);
    Route::apiResource('carts', CartController::class);
    Route::apiResource('riders', RiderController::class);
    Route::apiResource('restaurants', RestaurantController::class);
    Route::apiResource('transactions', TransactionController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('vouchers', VoucherController::class);
    Route::apiResource('used_voucher', UsedVoucherController::class);
    Route::apiResource('consumed_food', ConsumedFoodController::class);
});