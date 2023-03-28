<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class superadmin_sales extends Model
{
    use HasFactory;
    public $table = "superadmin_sales";
    public $timestamps = false;

    public static function getAllSales()
    {
        $result = DB::table('superadmin_sales')
        ->select('superadmin_sales_id', 'merchant_id', 'name', 'total', 'revenue', 'date')
        ->get()->toArray();
        return $result;
    }
}