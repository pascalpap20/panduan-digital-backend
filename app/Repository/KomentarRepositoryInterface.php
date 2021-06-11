<?php

namespace App\Repository;

interface KomentarRepositoryInterface {
	public function add(array $attributes);
	public function getKomentar($id);
	public function updateKomentar(array $attributes);
	public function delete($id);
}
