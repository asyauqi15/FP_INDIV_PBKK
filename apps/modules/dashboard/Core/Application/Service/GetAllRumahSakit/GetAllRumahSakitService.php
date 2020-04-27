<?php

namespace Uqi\Dashboard\Core\Application\Service\GetAllRumahSakit;

use Uqi\Dashboard\Core\Domain\Repository\RumahSakitRepositoryInterface;

class GetAllRumahSakitService
{
	protected RumahSakitRepositoryInterface $repository;

	public function __construct(RumahSakitRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute()
	{
		try {
			$rumah_sakit = $this->repository->getAllRumahSakit();
		} catch(\Exception $e) {
			echo $e->getMessage();
		}

		return $rumah_sakit;
	}
}