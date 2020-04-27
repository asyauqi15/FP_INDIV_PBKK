<?php

namespace Uqi\Dashboard\Core\Application\Service\AddRumahSakit;

use Exception;
use Uqi\Dashboard\Core\Domain\Model\RumahSakit;
use Uqi\Dashboard\Core\Domain\Repository\RumahSakitRepositoryInterface;

class AddRumahSakitService 
{
	protected RumahSakitRepositoryInterface $rumahSakitRepository;

	public function __construct(RumahSakitRepositoryInterface $rumahSakitRepository)
	{
		$this->rumahSakitRepository = $rumahSakitRepository;
	}

	public function execute(AddRumahSakitRequest $request) 
	{
		try {
			$rumah_sakit = new RumahSakit(
				$request->getNamaRumahSakit(),
				$request->getAlamatRumahSakit()
			);

			$result = $this->rumahSakitRepository->addRumahSakit($rumah_sakit);

			if(!$result) {
				throw new Exception('unable to add rumah sakit');
			}

		} catch (\Exception $e) {
			throw $e;
		}
	}
}