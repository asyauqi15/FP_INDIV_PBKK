<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class Antrean
{
    private DateTime $tanggal_antrean;
    
    private $id_antrean;

    private int $id_akun;

    private int $id_rumah_sakit;

    private int $status;

    public function __construct($tanggal_antrean, $id_antrean = NULL, $id_akun, $id_rumah_sakit, $status)
	{
		$this->tanggal_antrean = $tanggal_antrean;
		$this->id_antrean = $id_antrean;
		$this->id_akun = $id_akun;
		$this->id_rumah_sakit = $id_rumah_sakit;
		$this->status = $status;
    }
    
    public function getTanggalAntrean()
	{
		return $this->tanggal_antrean;
	}

	public function setTanggalAntrean($tanggal_antrean)
	{
		$this->tanggal_antrean = $tanggal_antrean;
    }
    
    public function getIdAntrean()
	{
		return $this->id_antrean;
	}

	public function setIdAntrean($id_antrean)
	{
		$this->id_antrean = $id_antrean;
    }
    
    public function getIdAkunAntrean()
	{
		return $this->id_akun;
	}

	public function setIdAkunAntrean($id_akun)
	{
		$this->id_akun = $id_akun;
    }
    
    public function getIdRumahSakitAntrean()
	{
		return $this->id_rumah_sakit;
	}

	public function setIdRumahSakitAntrean($id_rumah_sakit)
	{
		$this->id_rumah_sakit = $id_rumah_sakit;
    }
    
    public function getStatusAntrean()
	{
		return $this->status;
	}

	public function setStatusAntrean($status)
	{
		$this->status = $status;
	}
}