<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\mata_kuliah;
use App\Repository\MataKuliahRepositoryInterface;

class mata_kuliah_controller extends Controller
{
    //
    // function add(Request $req) {
    //     $mata_kuliah = new mata_kuliah;
    //     $mata_kuliah->nama_mata_kuliah = $req->nama_mata_kuliah;
    //     $mata_kuliah->nama_departemen = $req->nama_departemen;
    //     $mata_kuliah->deskripsi = $req->deskripsi;
    //     $mata_kuliah->id_civitas_ipb = $req->id_civitas_ipb;
    //     $mata_kuliah->kode_mk = $req->kode_mk;
    //     $mata_kuliah->semester = $req->semester;
    //     $mata_kuliah->jenis = $req->jenis;
        
    //     $result = $mata_kuliah->save();

    //     if($result){
    //         return ["Result" => "Data has been saved"];
    //     }
    //     else {
    //         return ["Result" => "Failed"];
    //     }
    // }

    // function getListMataKuliah($id=null){
    //     return $id?mata_kuliah::find($id):mata_kuliah::all();
    // }


    private $mataKuliahRepo;
    public function __construct(MataKuliahRepositoryInterface $mataKuliahRepo){
        $this->mataKuliahRepo = $mataKuliahRepo;
    }

    public function getMataKuliah($id=null){
        $matkul = $this->mataKuliahRepo->get($id);
        return $matkul;
    }

    public function addData(Request $req) {
        return $this->mataKuliahRepo->add($req);
    }

    public function getMataKuliahElektif($id=null){
        $matkul = $this->mataKuliahRepo->getElektif($id);
        return $matkul;
    }

    public function addDataElektif(Request $req) {
        return $this->mataKuliahRepo->addElektif($req);
    }
}
