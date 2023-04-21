<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_app_user extends Model
{
    use HasFactory;
    public $table ="app_users";
    public $timestamps = false;
}