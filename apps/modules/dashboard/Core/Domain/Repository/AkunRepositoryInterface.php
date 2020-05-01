<?php

namespace Uqi\Dashboard\Core\Domain\Repository;

use Uqi\Dashboard\Core\Domain\Model\Akun;

interface AkunRepositoryInterface 
{
	public function addAkun(Akun $akun);

	public function getAllAkun(): ?array;

	public function findAkun($id) : ?Akun;

	public function loginAkun(string $username, string $password) : ?Akun;

	public function editAkun(Akun $akun);

	// public function updateAkun(Akun $akun) : Akun;

	// public function deleteAkun(Akun $akun);
}