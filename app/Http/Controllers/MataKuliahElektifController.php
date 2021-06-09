<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliahElektif;

class MataKuliahElektifController extends Controller
{
    //
    function add(Request $req) {
        $mk_elektif = new MataKuliahElektif;
        $mk_elektif->MataKuliahId = $req->MataKuliahId;
        $mk_elektif->Kode = $req->Kode;
        $mk_elektif->Nama = $req->Nama;
        $mk_elektif->Sks = $req->Sks;
        $mk_elektif->SksKuliah = $req->SksKuliah;
        $mk_elektif->SksPraktikum = $req->SksPraktikum;
                
        $result = $mk_elektif->save();

        if($result){
            return ["Result" => "Data has been saved"];
        }
        else {
            return ["Result" => "Failed"];
        }
    }

    
    function getListMataKuliahElektif($id=null){
        return $id?MataKuliahElektif::find($id):MataKuliahElektif::all();
    }
}
