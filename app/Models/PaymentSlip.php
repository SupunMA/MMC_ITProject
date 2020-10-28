<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSlip extends Model
{
    protected $primaryKey = 'CusID';

    protected $fillable= [
        'CusID',
        'Term',
        'Bank',
        'PaidAmount',
        'ScanCopyImg'
    ];

    //use HasFactory;

}
