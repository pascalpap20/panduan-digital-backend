<?php

namespace App\Repository\Eloquent;
use App\Repository\KomentarRepositoryInterface;
use App\Models\komentar;

class KomentarRepository implements KomentarRepositoryInterface {
	protected $model;
	public function __construct(komentar $model) {
		$this->model = $model;
	}

	public function add($req) {
		$attribute = [
		'username'			=> $req->username,
        'nim'				=> $req->nim,
        'komentar'			=> $req->komentar,
        'id_mata_kuliah'	=> $req->id_mata_kuliah,
        'id_civitas_ipb'	=> $req->id_civitas_ipb
		];

		$result = $this->model->create($attribute);

		if($result){
			return ["Result" => "Komentar has been saved"];
		} else {
			return ["Result" => "Failed"];
		}

	}
	
	public function getKomentar($id=null) {
		return $id?$this->model->find($id):$this->model->all();
		// return $this->model->find($id);
	}

    public function updateKomentar($req){
        $komentar = $this->model->find($req->id);
        $komentar->username = $req->username;
        $komentar->nim = $req->nim;
        $komentar->komentar = $req->komentar;
        $komentar->id_mata_kuliah = $req->id_mata_kuliah;
        $komentar->id_civitas_ipb = $req->id_civitas_ipb;
        
        $result = $komentar->save();

		if($result){
			return ["Result" => "Komentar has been updated"];
		} else {
			return ["Result" => "Failed"];
		}
    }
    
    public function delete($id){
        $komentar = $this->model->find($id);
        $result = $komentar->delete();
        if($result){
            return ["result"=>"record has been deleted"];
        } else {
            return ["result"=>"Failed to delete"];
        }
    }

}
