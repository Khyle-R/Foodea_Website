<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_voucher;

class UsedVoucher extends Model
{
    use HasFactory;
    public $table = "used_voucher";
    protected $fillable = [
        'id',
        'user_id',
        'voucher_id'
    ];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function voucher_details(){
        return $this->hasOne(tbl_voucher::class, 'voucher_id', 'voucher_id');
    }
}