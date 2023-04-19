<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}