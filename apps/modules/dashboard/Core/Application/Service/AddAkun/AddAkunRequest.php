<?php

namespace Uqi\Dashboard\Core\Application\Service\AddAkun;

class AddAkunRequest 
{
	protected $username;
	protected $email;
	protected $password;
	protected $jenis_akun;

	public function __construct(
		$username, 
		$email, 
		$password, 
		$jenis_akun
	)
	{
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->jenis_akun = $jenis_akun;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getJenisAkun()
	{
		return $this->jenis_akun;
	}

	public function setJenisAkun($jenis_akun)
	{
		$this->jenis_akun = $jenis_akun;
	}
}