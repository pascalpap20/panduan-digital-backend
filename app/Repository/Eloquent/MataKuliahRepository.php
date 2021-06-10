<?php

namespace App\Repository\Eloquent;
use App\Repository\MataKuliahRepositoryInterface;
use App\Models\mata_kuliah;
use App\Models\MataKuliahElektif;


class MataKuliahRepository implements MataKuliahRepositoryInterface {
	protected $model, $modelElektif;
	public function __construct(mata_kuliah $model, MataKuliahElektif $modelElektif) {
		$this->model = $model;
		$this->modelElektif = $modelElektif;
	}

	public function add($req) {
		$attribute = [
		'nama_mata_kuliah'	=> $req->nama_mata_kuliah,
        'nama_departemen'	=> $req->nama_departemen,
        'deskripsi'			=> $req->deskripsi,
        'id_civitas_ipb'	=> $req->id_civitas_ipb,
        'kode_mk'			=> $req->kode_mk,
        'semester'			=> $req->semester,
        'jenis'				=> $req->jenis 
		];

		$result = $this->model->create($attribute);
		
		if($result){
			return ["Result" => "Data has been saved"];
		} else {
			return ["Result" => "Failed"];
		}

	}
	
	public function get($id=null) {
		return $id?$this->model->find($id):$this->model->all();
		// return $this->model->find($id);
	}


	public function addElektif($req){
		$attribute = [
		'Kode'			=> $req->Kode,
        'Nama'			=> $req->Nama,
        'Sks'			=> $req->Sks,
        'SksKuliah'		=> $req->SksKuliah,
        'SksPraktikum'	=> $req->SksPraktikum
		];

		$result = $this->modelElektif->create($attribute);
		
		if($result){
			return ["Result" => "Data has been saved"];
		} else {
			return ["Result" => "Failed"];
		}
	}

	public function getElektif($id=null) {
		return $id?$this->modelElektif->find($id):$this->modelElektif->all();
		// return $this->model->find($id);
	}
}

class MataKuliahElektifRepository extends MataKuliahRepository {

}