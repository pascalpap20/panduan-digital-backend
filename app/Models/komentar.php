<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'nim',
        'komentar',
        'id_mata_kuliah',
        'id_civitas_ipb' 
    ];
}
