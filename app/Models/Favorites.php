<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_product;

class Favorites extends Model
{
    use HasFactory;
    public $table = 'favorites';
    protected $fillable = [
        'user_id',
        'product_id'
    ];

    public function product_details(){
        return $this->hasOne(tbl_product::class, 'product_id', 'product_id');
    }

}
