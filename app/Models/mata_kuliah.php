<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nama_mata_kuliah',
        'nama_departemen',
        'deskripsi',
        'id_civitas_ipb',
        'kode_mk',
        'semester',
        'jenis',
    ];
}
