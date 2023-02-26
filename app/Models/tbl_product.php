<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model
{
    use HasFactory;
    public $table ="tbl_product";
    public $timestamps = false;

    protected $fillable = [
        'merchant_id',
        'category_id',
        'product_name',
        'price',
        'product_image',
        'stock',
        'status',
        'description',
    ];
}