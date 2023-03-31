<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_transaction extends Model
{
    use HasFactory;
    public $table = 'tbl_transaction';
    public $timestamps = false;
    protected $filable = [
        'transaction_id',
        'order_key',
        'merchant_id',
        'customer_id',
        'rider_id',
        'products_id',
        'order_status',
        'date'
    ];
    protected $primaryKey = 'transaction_id';
}
