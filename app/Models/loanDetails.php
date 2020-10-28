<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loanDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'LoanID';
    protected $fillable = [
        'LoanID','cid','LoanAmount','IntRate','lateRate', 'loanDate'
    ];
}
