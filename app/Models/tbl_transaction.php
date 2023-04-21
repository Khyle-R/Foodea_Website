<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_product;
use App\Models\tbl_merchant_info;
use App\Models\AppUser;
use App\Models\tbl_rider_account;

class tbl_transaction extends Model
{
    use HasFactory;
    public $table = 'tbl_transaction';
    public $timestamps = false;
    protected $fillable = [
        'transaction_id',
        'order_key',
        'merchant_id',
        'customer_id',
        'rider_id',
        'product_id',
        'order_status',
        'date'
    ];
    protected $primaryKey = 'transaction_id';

    public function product_details(){
        return $this->hasOne(tbl_product::class, 'product_id', 'product_id');
    }

    public function user_details(){
        return $this->hasOne(AppUser::class, 'user_id', 'customer_id');
    }

    public function restaurant_details(){
        return $this->hasOne(tbl_merchant_info::class, 'merchant_id', 'merchant_id')->with('documents');
    }

    public function rider_details(){
        return $this->hasOne(tbl_rider_account::class, 'rider_id', 'rider_id')->with('rider_documents');
    }
}
