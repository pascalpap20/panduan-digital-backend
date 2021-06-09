<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class civitas_ipb extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'nim',
        'isStaff' 
    ];
}
