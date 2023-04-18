<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_rider_document;

class tbl_rider_accounts extends Model
{
    use HasFactory;
    public $table ="tbl_rider_account";
    protected $fillable = [
        'rider_id',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'age',
        'gender',
        'birthdate',
        'email',
        'mobile_number',
        'address',
        'city',
        'barangay',
        'zip_code',
        'date'
    ];
    protected $primaryKey = 'rider_id';
    public $timestamps = false;

    public function rider_documents(){
        return $this->hasOne(tbl_rider_document::class, 'rider_id', 'rider_id');
    }
}