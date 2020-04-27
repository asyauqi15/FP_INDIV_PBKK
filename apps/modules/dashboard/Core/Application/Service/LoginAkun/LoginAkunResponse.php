<?php

namespace Uqi\Dashboard\Core\Application\Service\LoginAkun;

use Uqi\Dashboard\Core\Domain\Model\Akun;

class LoginAkunResponse 
{
	protected $data;

	public function __construct($data) 
	{
		$this->data = $data;
	}

	public function getData() : ?Akun
	{
		return $this->data;
	}
}