<?php
// id username jenis akun
namespace Uqi\Dashboard\Core\Application\Service\FindAkun;

use Exception;
use Uqi\Dashboard\Core\Domain\Model\Akun;
use Uqi\Dashboard\Core\Domain\Repository\AkunRepositoryInterface;

class FindAkunService
{
    protected AkunRepositoryInterface $akunRepository;

    public function __construct(AkunRepositoryInterface $akunRepository)
    {
        $this->akunRepository = $akunRepository;
    }

    public function execute(FindAkunRequest $request)
    {
        try {
			$id_akun = $request->getId();
            $akun = $this->akunRepository->findAkun($id_akun);

			if(!isset($akun)) {
				throw new \Exception("akun not found");
			}

		} catch (\Exception $e) {
			throw $e;
		}

		return $user;   
    }
}