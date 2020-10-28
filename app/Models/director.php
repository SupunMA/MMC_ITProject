<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class director extends Model
{
    protected $primaryKey = 'did';
    use HasFactory;

    protected $fillable = [
        'photo','dname','dposition','fb', 'twt','in'
    ];
}
