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
}