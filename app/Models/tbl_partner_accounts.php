<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_partner_accounts extends Model
{
    use HasFactory;
    public $table ="tbl_merchant_account";
    public $timestamps = false;
}