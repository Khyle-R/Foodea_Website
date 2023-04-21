<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_merchant_info;

class tbl_voucher extends Model
{
    use HasFactory;
    public $table = "tbl_voucher";
    protected $fillable = [
        'voucher_id',
        'merchant_id',
        'voucher_name',
        'voucher_code',
        'discount',
        'total_claimed',
        'description',
        'status',
        'exp_date',
        'date'
    ];
    public $timestamps = false;

    public function restaurant_details(){
        return $this->hasOne(tbl_merchant_info::class, 'merchant_id', 'merchant_id')->with('documents');
    }
}
