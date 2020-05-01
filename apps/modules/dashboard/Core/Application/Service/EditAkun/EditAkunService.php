<?php
// id username jenis akun
namespace Uqi\Dashboard\Core\Application\Service\EditAkun;

use Exception;
use Uqi\Dashboard\Core\Domain\Model\Akun;
use Uqi\Dashboard\Core\Domain\Repository\AkunRepositoryInterface;

class EditAkunService
{
    protected AkunRepositoryInterface $akunRepository;

    public function __construct(AkunRepositoryInterface $akunRepository)
    {
        $this->akunRepository = $akunRepository;
    }

    public function execute(Akun $request)
    {
        try {
            $result = $this->akunRepository->editAkun($request);
		} catch (\Exception $e) {
			throw $e;
		}   
    }
}