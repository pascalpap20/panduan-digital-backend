<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'fakultas',
        'kode_departemen',
        'nama_departemen'
    ];
}
