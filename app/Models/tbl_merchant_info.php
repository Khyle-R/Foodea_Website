<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_merchant_account;
use App\Models\tbl_merchant_document;
use App\Models\tbl_category;
use App\Models\tbl_voucher;

class tbl_merchant_info extends Model
{
    use HasFactory;
    public $table ="tbl_merchant_info";
    protected $fillable = [
        'merchant_id',
        'business_type',
        'business_name',
        'date_founded',
        'country',
        'address',
        'city',
        'barangay',
        'street',
        'postal_code',
        'store_number',
        'store_email',
        'mission',
        'vision',
        'date'
    ];
    protected $primaryKey = 'merchantinfo_id';

    public $timestamps = false;

    public function documents(){
        return $this->hasOne(tbl_merchant_document::class, 'merchant_id', 'merchant_id');
    }

    public function account_details(){
        return $this->hasOne(tbl_merchant_account::class, 'merchant_id', 'merchant_id');
    }

    public function categories(){
        return $this->hasMany(tbl_category::class, 'merchant_id', 'merchant_id');
    }
    
    public function vouchers(){
        return $this->hasMany(tbl_voucher::class, 'merchant_id', 'merchant_id');
    }
}