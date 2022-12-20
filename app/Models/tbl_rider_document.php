<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_rider_document extends Model
{
    use HasFactory;
    public $table = "tbl_document_info";
     public $timestamps = false;
}