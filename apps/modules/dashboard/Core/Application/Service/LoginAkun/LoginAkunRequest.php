<?php

namespace Uqi\Dashboard\Core\Application\Service\LoginAkun;

class LoginAkunRequest 
{
	protected string $username;
	protected string $password;

	public function __construct(
		string $username, 
		string $password
	)
	{
		$this->username = $username;
		$this->password = $password;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getPassword()
	{
		return $this->password;
	}
}