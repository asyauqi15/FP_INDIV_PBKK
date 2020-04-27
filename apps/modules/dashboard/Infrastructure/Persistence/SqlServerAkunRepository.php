<?php

namespace Uqi\Dashboard\Infrastructure\Persistence;

use Uqi\Dashboard\Core\Domain\Model\Akun;
use Uqi\Dashboard\Core\Domain\Repository\AkunRepositoryInterface;

class SqlServerAkunRepository implements AkunRepositoryInterface 
{
	/**
	 * @var \Phalcon\Db\Adapter\AbstractAdapter
	 */
	protected $db;

	public function __construct($db) 
	{
		$this->db = $db;
	}

	public function addAkun(Akun $akun)
	{
		$sql = "INSERT INTO akun (username, email, password, jenis_akun) VALUES(:username, :email, :password, :jenis_akun)";
		$params = [
			'username' => $akun->getUsername(),
			'email' => $akun->getEmail(),
			'password' => $akun->getPassword(),
			'jenis_akun' => $akun->getJenisAkun()
		];

		$result = $this->db->execute($sql, $params);

		return $result;
    }

	// public function findUserById(UserId $id) : ?User 
	// {
	// 	$sql = "SELECT * from users WHERE user_id=:user_id";
	// 	$param = ['user_id' => $id->id()];

	// 	$result = $this->db->fetchOne($sql, \Phalcon\Db\Enum::FETCH_ASSOC, $param);

	// 	if($result) {
	// 		$password = new Password($result['password']);
	// 		$user = new User(
	// 			new UserId($result['user_id']),
	// 			$result['username'],
	// 			$result['email'],
	// 			$password,
	// 			$result['role']
	// 		);

	// 		return $user;
	// 	}

	// 	return null;
		
	// }

	public function loginAkun(string $username, string $password) : ?Akun
	{
		$sql = "SELECT * from akun WHERE username=:username";
		$param = [
			'username' => $username
		];

        $result = $this->db->fetchOne($sql, \Phalcon\Db\Enum::FETCH_ASSOC, $param);

		// If data found
		if($result) {
			$akun= new Akun(
                $result['USERNAME'],
                $result['EMAIL'],
                $result['PASSWORD'],
                $result['JENIS_AKUN'],
                $result['ID_AKUN']
            );

			// Check password from input
			if($akun->getPassword() == $password) {
				return $akun;
			}
		}

		return null;
	}

	// public function updateUser(User $user) : User {
	// 	// $user = new User();

	// 	return $user;
	// }

	// public function deleteUser(UserId $id) {
		
	// }
}