<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prasyarat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_mata_kuliah'
    ];
}
