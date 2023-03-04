<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;
    public $table = 'app_users';
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'height',
        'weight',
        'gender',
        'address',
        'contact_number',
        'bmi',
        'email',
        'password',
    ];
}
