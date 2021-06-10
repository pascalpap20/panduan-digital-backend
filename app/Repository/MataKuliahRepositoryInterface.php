<?php

namespace App\Repository;

interface MataKuliahRepositoryInterface {
	public function add(array $attributes);
	public function get($id);

	public function addElektif(array $attributes);
	public function getElektif($id);
}
