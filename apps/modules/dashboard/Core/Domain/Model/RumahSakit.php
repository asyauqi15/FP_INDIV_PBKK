<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class RumahSakit
{   
    private $id_rumah_sakit;
    
    private $id_villages;

	private $nama_rumah_sakit;

	private $alamat_rumah_sakit;

    private $kuota_rumah_sakit;
    
    private $kuota_terisi;

    private $jumlah_dokter;

    private $jumlah_perawat;

	private $jumlah_tenaga_medis_lainnya;
	
	private $status_antrean;

    public function __construct(
		$nama_rumah_sakit, 
		$alamat_rumah_sakit, 
		$id_rumah_sakit = NULL, 
		$id_villages = NULL, 
		$kuota_rumah_sakit = NULL, 
		$kuota_terisi = NULL, 
		$jumlah_dokter = NULL,
		$jumlah_perawat = NULL, 
		$jumlah_tenaga_medis_lainnya = NULL,
		$status_antrean = 0
		)
	{
		$this->id_rumah_sakit = $id_rumah_sakit;
        $this->id_villages = $id_villages;
        $this->nama_rumah_sakit = $nama_rumah_sakit;
        $this->alamat_rumah_sakit = $alamat_rumah_sakit;
        $this->kuota_rumah_sakit = $kuota_rumah_sakit;
        $this->kuota_terisi = $kuota_terisi;
        $this->jumlah_dokter = $jumlah_dokter;
        $this->jumlah_perawat = $jumlah_perawat;
		$this->jumlah_tenaga_medis_lainnya = $jumlah_tenaga_medis_lainnya;
		$this->status_antrean = $status_antrean;
	}

	public function getIdRumahSakit()
	{
		return $this->id_rumah_sakit;
	}

	public function setIdRumahSakit($id_rumah_sakit)
	{
		$this->id_rumah_sakit = $id_rumah_sakit;
	}

    public function getIdVillagesRumahSakit()
	{
		return $this->id_villages;
	}

	public function setIdVillagesRumahSakit($id_villages)
	{
		$this->id_villages = $id_villages;
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
    
    public function getKuotaRumahSakit()
	{
		return $this->kuota_rumah_sakit;
	}

	public function setKuotaRumahSakit($kuota_rumah_sakit)
	{
		$this->kuota_rumah_sakit = $kuota_rumah_sakit;
    }
    
    public function getKuotaTerisiRumahSakit()
	{
		return $this->kuota_terisi;
	}

	public function setKuotaTerisiRumahSakit($kuota_terisi)
	{
		$this->kuota_terisi = $kuota_terisi;
    }
    
    public function getJumlahDokterRumahSakit()
	{
		return $this->jumlah_dokter;
	}

	public function setJumlahDokterRumahSakit($jumlah_dokter)
	{
		$this->jumlah_dokter = $jumlah_dokter;
    }
    
    public function getJumlahPerawatRumahSakit()
	{
		return $this->jumlah_perawat;
	}

	public function setJumlahPerawatRumahSakit($jumlah_perawat)
	{
		$this->jumlah_perawat = $jumlah_perawat;
    }
    
    public function getJumlahTenagaMedisLainnya()
	{
		return $this->jumlah_tenaga_medis_lainnya;
	}

	public function setJumlahTenagaMedisLainnya($jumlah_tenaga_medis_lainnya)
	{
		$this->jumlah_tenaga_medis_lainnya = $jumlah_tenaga_medis_lainnya;
	}
	
	public function getStatusAntrean()
	{
		return $this->status_antrean;
	}

	public function setStatusAntrean($status_antrean)
	{
		$this->status_antrean = $status_antrean;
	}
}