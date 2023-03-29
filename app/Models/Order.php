<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_product;
use App\Models\tbl_merchant_info;
use App\Models\AppUser;

class Order extends Model
{
    use HasFactory;
    public $table = 'tbl_orders';
    protected $fillable = [
        'customer_id',
        'product_id',
        'order_key',
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

    public function user_details(){
        return $this->hasOne(AppUser::class, 'user_id', 'customer_id');
    }

    public function restaurant_details(){
        return $this->hasOne(tbl_merchant_info::class, 'merchant_id', 'restaurant_id')->with('documents');
    }
}
