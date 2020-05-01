<?php

namespace Uqi\Dashboard\Infrastructure\Persistence;

use Uqi\Dashboard\Core\Domain\Model\RumahSakit;
use Uqi\Dashboard\Core\Domain\Repository\RumahSakitRepositoryInterface;

class SqlServerRumahSakitRepository implements RumahSakitRepositoryInterface 
{
    protected $db;

	public function __construct($db) 
	{
		$this->db = $db;
    }
    
    public function getAllRumahSakit() : ?array
    {
        $sql = "SELECT * FROM RUMAH_SAKIT";

        $results = $this->db->fetchAll($sql, \Phalcon\Db\Enum::FETCH_ASSOC);
        
        $all_rumah_sakit = [];
		if($results) {
			foreach ($results as $result) {
				$rumah_sakit = new RumahSakit(
					$result['NAMARUMAH_SAKIT'],
					$result['ALAMAT_RUMAH_SAKIT'],
					$result['ID_RUMAH_SAKIT'],
                    $result['ID_VILLAGES'],
					$result['KUOTA_RUMAH_SAKIT'],
					$result['KUOTA_TERISI'],
					$result['JUMLAH_DOKTER'],
					$result['JUMLAH_PERAWAT'],
					$result['JUMLAH_TENAGA_MEDIS_LAINNYA']
				);

				array_push($all_rumah_sakit, $rumah_sakit);
			}
		}

		return $all_rumah_sakit;
    }

    public function addRumahSakit( RumahSakit $rumah_sakit )
    {
        $sql = "INSERT INTO RUMAH_SAKIT (namarumah_sakit, alamat_rumah_sakit) VALUES (:nama_rumah_sakit, :alamat_rumah_sakit)";

        $params = [
			'nama_rumah_sakit' => $rumah_sakit->getNamaRumahSakit(),
			'alamat_rumah_sakit' => $rumah_sakit->getAlamatRumahSakit()
        ];
        
        $result = $this->db->execute($sql, $params);

		return $result;
    }
}