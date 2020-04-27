<?php

namespace Uqi\Dashboard\Core\Application\Service\AddAkun;

use Exception;
use Uqi\Dashboard\Core\Domain\Model\Akun;
use Uqi\Dashboard\Core\Domain\Repository\AkunRepositoryInterface;

class AddAkunService 
{
	protected AkunRepositoryInterface $akunRepository;

	public function __construct(AkunRepositoryInterface $akunRepository)
	{
		$this->akunRepository = $akunRepository;
	}

	public function execute(AddAkunRequest $request) 
	{
		try {
			$akun = new Akun(
				$request->getUsername(),
				$request->getEmail(),
				$request->getPassword(),
				$request->getJenisAkun()
			);

			$result = $this->akunRepository->addAkun($akun);

			if(!$result) {
				throw new Exception('unable to add user');
			}

		} catch (\Exception $e) {
			throw $e;
		}
	}
}