<?php

namespace Uqi\Dashboard\Core\Application\Service\AddRumahSakit;

class AddRumahSakitRequest 
{
    protected $nama_rumah_sakit;
    protected $alamat_rumah_sakit;

	public function __construct(
		$nama_rumah_sakit, 
		$alamat_rumah_sakit
	)
	{
		$this->nama_rumah_sakit = $nama_rumah_sakit;
		$this->alamat_rumah_sakit = $alamat_rumah_sakit;
	}

	public function getNamaRumahSakit()
	{
		return $this->nama_rumah_sakit;
	}

	public function setNamaRumahSakit($nama_rumah_sakit)
	{
		$this->nama_rumah_sakit = $nama_rumah_sakit;
	}

	public function getAlamatRumahSakit()
	{
		return $this->alamat_rumah_sakit;
	}

	public function setAlamatRumahSakit($alamat_rumah_sakit)
	{
		$this->alamat_rumah_sakit = $alamat_rumah_sakit;
	}
}