<?php

namespace App\Repository\Eloquent;
use App\Repository\TertarikElektifRepositoryInterface;
use App\Models\TertarikElektif;

class TertarikElektifRepository implements TertarikElektifRepositoryInterface {
	protected $model;
	public function __construct(TertarikElektif $model) {
		$this->model = $model;
	}

	public function add($req) {
		$attribute = [
		'username'			=> $req->username,
        'nim'				=> $req->nim,
        'id_mata_kuliah'	=> $req->id_mata_kuliah,
        'id_civitas_ipb'	=> $req->id_civitas_ipb
		];

		$result = $this->model->create($attribute);
		
		if($result){
			return ["Result" => "Data has been saved"];
		} else {
			return ["Result" => "Failed"];
		}

	}
	
	public function getListTertarik($id=null) {
		return $id?$this->model->find($id):$this->model->all();
		// return $this->model->find($id);
	}

    public function deleteTertarik($id){
        $tertarik = $this->model->find($id);
        $result = $tertarik->delete();
        if($result){
            return ["result"=>"record has been deleted"];
        } else {
            return ["result"=>"Failed to delete"];
        }
    }
}
