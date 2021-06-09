<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahElektif extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
    	'Kode',
    	'Nama',
    	'Sks',
    	'SksKuliah',
    	'SksPraktikum'
    ];
}
