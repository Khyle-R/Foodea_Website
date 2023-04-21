<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_rider_document extends Model
{
    use HasFactory;
    public $table = "tbl_document_info";
    protected $fillable = [
        'document_id',
        'rider_id',
        'driver_license',
        'official_receipt',
        'cert_registration',
        'nbi_clearance',
        'drug_test',
        'rider_photo',
        'vehicle_front',
        'vehicle_back',
        'vehicle_side',
        'auth_letter',
        'deed_sale',
        'date'
    ];
    protected $primaryKey = 'document_id';
    public $timestamps = false;
}