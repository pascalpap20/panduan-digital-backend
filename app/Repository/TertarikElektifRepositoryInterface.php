<?php

namespace App\Repository;

interface TertarikElektifRepositoryInterface {
	public function add(array $attributes);
	public function getListTertarik($id);
	public function deleteTertarik($id);

}
