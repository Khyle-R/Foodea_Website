<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_product;

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

    public function product_details(){
        return $this->hasOne(tbl_product::class, 'product_id', 'product_id');
    }
}
