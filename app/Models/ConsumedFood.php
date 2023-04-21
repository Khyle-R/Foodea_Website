<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumedFood extends Model
{
    use HasFactory;
    public $table = 'consumed_food';
    protected $fillable = [
        'id',
        'user_id',
        'food_name',
        'calories',
        'date',
    ];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
