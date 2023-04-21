<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_orders extends Model
{
    use HasFactory;
     public $table = "tbl_orders";
     public $timestamps = false;
}