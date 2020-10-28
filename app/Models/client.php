<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $primaryKey = 'clientid';
    use HasFactory;

    protected $fillable = [
        'photo','url'
    ];
}
