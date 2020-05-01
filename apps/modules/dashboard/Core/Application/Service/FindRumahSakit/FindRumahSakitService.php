<?php

namespace Uqi\Dashboard\Core\Application\Service\FindRumahSakit;

use Uqi\Dashboard\Core\Domain\Repository\RumahSakitRepositoryInterface;

class FindRumahSakitService
{
	protected RumahSakitRepositoryInterface $repository;

	public function __construct(RumahSakitRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($id_rumah_sakit)
	{
		try {
			$rumah_sakit = $this->repository->findRumahSakit($id_rumah_sakit);
		} catch(\Exception $e) {
			echo $e->getMessage();
		}

		return $rumah_sakit;
	}
}