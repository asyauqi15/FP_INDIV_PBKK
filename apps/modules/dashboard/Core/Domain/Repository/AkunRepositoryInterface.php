<?php

namespace Uqi\Dashboard\Core\Domain\Repository;

use Uqi\Dashboard\Core\Domain\Model\Akun;

interface AkunRepositoryInterface 
{
	public function addAkun(Akun $akun);

	// public function findAkun(Akun $akun) : ?akun;

	public function loginAkun(string $username, string $password) : ?Akun;

	// public function updateAkun(Akun $akun) : Akun;

	// public function deleteAkun(Akun $akun);
}