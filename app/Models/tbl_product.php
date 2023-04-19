<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model
{
    use HasFactory;
    public $table ="tbl_product";
    protected $fillable = [
        'product_id',
        'merchant_id',
        'category_id',
        'category_name',
        'ingredients',
        'tags',
        'product_name',
        'price',
        'calories',
        'product_image',
        'stock',
        'status',
        'description',
        'date'
    ];
    protected $primaryKey = 'product_id';
    public $timestamps = false;
}