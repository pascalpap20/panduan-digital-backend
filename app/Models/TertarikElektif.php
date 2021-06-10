<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TertarikElektif extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'username',
        'nim',
        'id_mata_kuliah',
        'id_civitas_ipb'
    ];
}
