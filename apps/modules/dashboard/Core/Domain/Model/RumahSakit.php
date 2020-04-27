<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class RumahSakit
{   
    private int $id_rumah_sakit;
    
    private string $id_villages;

	private string $nama_rumah_sakit;

	private string $alamat_rumah_sakit;

    private int $kuota_rumah_sakit;
    
    private int $kuota_terisi;

    private int $jumlah_dokter;

    private int $jumlah_perawat;

    private int $jumlah_tenaga_medis_lainnya;

    public function __construct($id_rumah_sakit, $id_villages, $nama_rumah_sakit, $alamat_rumah_sakit, $kuota_rumah_sakit, $kuota_terisi, $jumlah_dokter,
        $jumlah_perawat, $jumlah_tenaga_medis_lainnya)
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
}