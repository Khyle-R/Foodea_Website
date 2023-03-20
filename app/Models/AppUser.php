<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;
    public $table = 'app_users';
    protected $fillable = [
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'height',
        'weight',
        'gender',
        'address',
        'age',
        'contact_number',
        'bmi',
        'email',
        'password',
        'lifestyle',
        'preferences'
    ];
    protected $primaryKey = 'user_id';
}
