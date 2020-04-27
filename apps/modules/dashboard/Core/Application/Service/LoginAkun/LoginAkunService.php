<?php

namespace Uqi\Dashboard\Core\Application\Service\LoginAkun;

use Uqi\Dashboard\Core\Domain\Repository\AkunRepositoryInterface;
use Exception;

class LoginAkunService 
{
	protected AkunRepositoryInterface $akunRepository;

	public function __construct(AkunRepositoryInterface $akunRepository)
	{
		$this->akunRepository = $akunRepository;
	}

	public function execute(LoginAkunRequest $request) 
	{
		try {
            $username = $request->getUsername();
            $password = $request->getPassword();
			$akun = $this->akunRepository->loginAkun($username, $password);

			if(!isset($akun)) {
				throw new Exception('akun not found');
			}

		} catch (\Exception $e) {
			throw $e;
        }
        
        return new LoginAkunResponse($akun);
	}
}