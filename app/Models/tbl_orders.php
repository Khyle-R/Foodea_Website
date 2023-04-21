<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_orders extends Model
{
    use HasFactory;
     public $table = "tbl_orders";
     protected $fillable = [
        'order_id',
        'customer_id',
        'merchant_id',
        'product_id',
        'order_key',
        'restaurant_id',
        'quantity',
        'total',
        'status',
        'payment_type',
        'latitude',
        'longitude',
        'date',
        'created_at',
        'updated_at'
    ];
     public $timestamps = false;
}