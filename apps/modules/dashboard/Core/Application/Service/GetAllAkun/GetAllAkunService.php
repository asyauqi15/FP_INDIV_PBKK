<?php

namespace Uqi\Dashboard\Core\Application\Service\GetAllAkun;

use Uqi\Dashboard\Core\Domain\Repository\AkunRepositoryInterface;

class GetAllAkunService
{
	protected AkunRepositoryInterface $repository;

	public function __construct(AkunRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute()
	{
		try {
			$akun = $this->repository->getAllAkun();
		} catch(\Exception $e) {
			echo $e->getMessage();
		}

		return $akun;
	}
}