<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table = 'tbl_orders';
    protected $fillable = [
        'customer_id',
        'product_id',
        'restaurant_id',
        'quantity',
        'total',
        'status',
        'payment_type',
        'date'
    ];
    protected $primaryKey = 'order_id';
}
