<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMsg extends Model
{
    use HasFactory;
    protected $fillable = [
        'msgID','UserID','sendSub','sendMSG', 'ResID','replySub','replyMSG','read','delete','sendDate','replyDate'
    ];

    protected $primaryKey = 'UserID';
}
