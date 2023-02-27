<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tbl_product;

class FoodController extends Controller
{
    public function index(){
        return tbl_product::all();
    }
}
