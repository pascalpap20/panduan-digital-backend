<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\TertarikElektif;
use App\Repository\TertarikElektifRepositoryInterface;

class TertarikElektifController extends Controller
{
    //
    // function add(Request $req) {
    //     $tertarik_elektif = new TertarikElektif;
    //     $tertarik_elektif->username = $req->username;
    //     $tertarik_elektif->nim = $req->nim;
    //     $tertarik_elektif->id_mata_kuliah = $req->id_mata_kuliah;
    //     $tertarik_elektif->id_civitas_ipb = $req->id_civitas_ipb;
                
    //     $result = $tertarik_elektif->save();

    //     if($result){
    //         return ["Result" => "Data has been saved"];
    //     }
    //     else {
    //         return ["Result" => "Failed"];
    //     }
    // }

    
    // function getListTertarikElektif($id=null){
    //     return $id?TertarikElektif::find($id):TertarikElektif::all();
    // }

    // function deleteTertarikElektif($id){
    //     $tertarik = TertarikElektif::find($id);
    //     $result = $tertarik->delete();
    //     if($result){
    //         return ["result"=>"record has been deleted"];
    //     } else {
    //         return ["result"=>"Failed to delete"];
    //     }
    // }

    private $tertarikRepo;
    public function __construct(TertarikElektifRepositoryInterface $tertarikRepo){
        $this->tertarikRepo = $tertarikRepo;
    }

    public function getMataKuliahElektif($id=null){
        $matkul = $this->tertarikRepo->getListTertarik($id);
        return $matkul;
    }

    public function addTertarik(Request $req){
        return $this->tertarikRepo->add($req);
    }

    public function deleteTertarikElektif($id){
        return $this->tertarikRepo->deleteTertarik($id);
    } 

}
