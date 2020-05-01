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
		$sql = "INSERT INTO akun (username, email, password, jenis_akun, id_rumah_sakit) VALUES(:username, :email, :password, :jenis_akun, :id_rumah_sakit)";
		$params = [
			'username' => $akun->getUsername(),
			'email' => $akun->getEmail(),
			'password' => $akun->getPassword(),
			'jenis_akun' => $akun->getJenisAkun(),
			'id_rumah_sakit' => $akun->getIdRumahSakitAkun()
		];

		$result = $this->db->execute($sql, $params);

		return $result;
	}
	
	public function getAllAkun(): ?array
	{
		$sql = "SELECT * FROM AKUN";

        $results = $this->db->fetchAll($sql, \Phalcon\Db\Enum::FETCH_ASSOC);
        
        $all_akun = [];
		if($results) {
			foreach ($results as $result) {
				$akun = new Akun(
					$result['USERNAME'],
					$result['EMAIL'],
					$result['PASSWORD'],
                    $result['JENIS_AKUN'],
					$result['ID_RUMAH_SAKIT'],
					$result['ID_AKUN'],
					$result['ID_VILLAGES'],
					$result['ID_PASIEN'],
					$result['JENIS_IDENTITAS'],
					$result['NOMOR_IDENTITAS'],
					$result['NAMA_LENGKAP'],
					$result['ALAMAT_LENGKAP'],
					$result['JENIS_KELAMIN']
				);

				array_push($all_akun, $akun);
			}
		}

		return $all_akun;
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