<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = 'carts';
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
}
