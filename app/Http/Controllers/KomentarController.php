<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\komentar;
use App\Repository\KomentarRepositoryInterface;

class KomentarController extends Controller
{
    //    
    // function add(Request $req) {
    //     $komentar = new komentar;
    //     $komentar->username = $req->username;
    //     $komentar->nim = $req->nim;
    //     $komentar->komentar = $req->komentar;
    //     $komentar->id_mata_kuliah = $req->id_mata_kuliah;
    //     $komentar->id_civitas_ipb = $req->id_civitas_ipb;
        
    //     $result = $komentar->save();

    //     if($result){
    //         return ["Result" => "Data has been saved"];
    //     }
    //     else {
    //         return ["Result" => "Failed"];
    //     }
    // }

    // function getListKomentar($id=null){
    //     return $id?komentar::find($id):komentar::all();
    // }

    // function editKomentar(Request $req){
    //     $komentar = komentar::find($req->id);
    //     $komentar->username = $req->username;
    //     $komentar->nim = $req->nim;
    //     $komentar->komentar = $req->komentar;
    //     $komentar->id_mata_kuliah = $req->id_mata_kuliah;
    //     $komentar->id_civitas_ipb = $req->id_civitas_ipb;
        
    //     $result = $komentar->save();
    //     if($result){
    //         return ["Result" => "Data has been edited"];
    //     }
    //     else {
    //         return ["Result" => "Failed"];
    //     }
        
    // }

    private $komentarRepo;
    public function __construct(KomentarRepositoryInterface $komentarRepo){
        $this->komentarRepo = $komentarRepo;
    }

    public function getListKomentar($id=null){
        $matkul = $this->komentarRepo->getKomentar($id);
        return $matkul;
    }

    public function add(Request $req){
        return $this->komentarRepo->add($req);
    }

    public function editKomentar(Request $req){
        return $this->komentarRepo->updateKomentar($req);
    }

    public function deleteKomentar($id) {
        return $this->komentarRepo->delete($id);
    }
}
