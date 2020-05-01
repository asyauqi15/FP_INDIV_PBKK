<?php

namespace Uqi\Dashboard\Core\Application\Service\BukaTutupAntreanRumahSakit;

use Uqi\Dashboard\Core\Domain\Repository\RumahSakitRepositoryInterface;

class BukaTutupAntreanRumahSakitService
{
	protected RumahSakitRepositoryInterface $repository;

	public function __construct(RumahSakitRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($id_rumah_sakit, $status)
	{
		try {
			$rumah_sakit = $this->repository->bukaTutupAntreanRumahSakit($id_rumah_sakit, $status);
		} catch(\Exception $e) {
			echo $e->getMessage();
        }
        return;
	}
}