<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departemen;

class DepartemenController extends Controller
{
    //
    function add(Request $req) {
        $departemen = new departemen;
        $departemen->fakultas = $req->fakultas;
        $departemen->kode_departemen = $req->kode_departemen;
        $departemen->nama_departemen = $req->nama_departemen;

        
        $result = $departemen->save();

        if($result){
            return ["Result" => "Data has been saved"];
        }
        else {
            return ["Result" => "Failed"];
        }
    }

    function getListDepartemen($id=null){
        return $id?departemen::find($id):departemen::all();
    }
}
