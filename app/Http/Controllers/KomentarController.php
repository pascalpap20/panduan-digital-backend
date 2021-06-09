<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\komentar;

class KomentarController extends Controller
{
    //    
    function add(Request $req) {
        $komentar = new komentar;
        $komentar->username = $req->username;
        $komentar->nim = $req->nim;
        $komentar->komentar = $req->komentar;
        $komentar->id_mata_kuliah = $req->id_mata_kuliah;
        $komentar->id_civitas_ipb = $req->id_civitas_ipb;
        
        $result = $komentar->save();

        if($result){
            return ["Result" => "Data has been saved"];
        }
        else {
            return ["Result" => "Failed"];
        }
    }

    function getListKomentar($id=null){
        return $id?komentar::find($id):komentar::all();
    }
}
