<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class Pasien
{

    private int $id_pasien;

    private int $id_rumah_sakit;
    
    private string $id_villages;

    private int $id_akun;    

    private string $nama_lengkap;

    private string $alamat_lengkap;

    private int $jenis_kelamin;

    private string $jenis_penyakit;

    private int $status;

    private string $riwayat_penyakit;

    private string $alergi;

    private int $berat_badan;

    private int $tekanan_darah;

    private int $tinggi_badan;
    
    private int $jenis_identitas;
    
    private string $nomor_identitas;

    public function __construct($id_pasien, $id_rumah_sakit, $id_villages, $id_akun, $nama_lengkap, $alamat_lengkap, $jenis_kelamin, $jenis_penyakit, $status,
        $riwayat_penyakit, $alergi, $berat_badan, $tekanan_darah, $tinggi_badan, $jenis_identitas, $nomor_identitas)
	{
		$this->id_pasien = $id_pasien;
        $this->id_rumah_sakit = $id_rumah_sakit;
        $this->id_villages = $id_villages;
        $this->id_akun = $id_akun;
        $this->nama_lengkap = $nama_lengkap;
        $this->alamat_lengkap = $alamat_lengkap;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->jenis_penyakit = $jenis_penyakit;
        $this->status = $status;
        $this->riwayat_penyakit = $riwayat_penyakit;
        $this->alergi = $alergi;
        $this->berat_badan = $berat_badan;
        $this->tekanan_darah = $tekanan_darah;
        $this->tinggi_badan = $tinggi_badan;
        $this->jenis_identitas = $jenis_identitas;
        $this->nomor_identitas = $nomor_identitas;
	}

	public function getIdPasien()
	{
		return $this->id_pasien;
	}

	public function setIdPasien($id_pasien)
	{
		$this->id_pasien = $id_pasien;
	}

    public function getIdRumahSakitPasien()
	{
		return $this->id_rumah_sakit;
	}

	public function setIdRumahSakitPasien($id_rumah_sakit)
	{
		$this->id_rumah_sakit = $id_rumah_sakit;
    }
    
    public function getIdVillagesPasien()
	{
		return $this->id_villages;
	}

	public function setIdVillagesPasien($id_villages)
	{
		$this->id_villages = $id_villages;
    }
    
    public function getIdAkunPasien()
	{
		return $this->id_akun;
	}

	public function setIdAkunPasien($id_akun)
	{
		$this->id_akun = $id_akun;
    }

    public function getNamaLengkapPasien()
	{
		return $this->nama_lengkap;
	}

	public function setNamaLengkapPasien($nama_lengkap)
	{
		$this->nama_lengkap = $nama_lengkap;
    }
    
    public function getAlamatLengkapPasien()
	{
		return $this->alamat_lengkap;
	}

	public function setAlamatLengkapPasien($alamat_lengkap)
	{
		$this->alamat_lengkap = $alamat_lengkap;
    }
    
    public function getJenisKelaminPasien()
	{
		return $this->jenis_kelamin;
	}

	public function setJenisKelaminPasien($jenis_kelamin)
	{
		$this->jenis_kelamin = $jenis_kelamin;
    }
    
    public function getJenisPenyakitPasien()
	{
		return $this->jenis_penyakit;
	}

	public function setJenisPenyakitPasien($jenis_penyakit)
	{
		$this->jenis_penyakit = $jenis_penyakit;
	}
    
    public function getStatusPasien()
	{
		return $this->status;
	}

	public function setStatusPasien($status)
	{
		$this->status = $status;
    }
    
    public function getRiwayatPenyakitPasien()
	{
		return $this->riwayat_penyakit;
	}

	public function setRiwayatPenyakit($riwayat_penyakit)
	{
		$this->riwayat_penyakit = $riwayat_penyakit;
    }
    
    public function getAlergiPasien()
	{
		return $this->alergi;
	}

	public function setAlergiPasien($alergi)
	{
		$this->alergi = $alergi;
    }
    
    public function getBeratBadanPasien()
	{
		return $this->berat_badan;
	}

	public function setBeratBadanPasien($berat_badan)
	{
		$this->berat_badan = $berat_badan;
    }

    public function getTekananDarahPasien()
	{
		return $this->tekanan_darah;
	}

	public function setTekananDarahPasien($tekanan_darah)
	{
		$this->tekanan_darah = $tekanan_darah;
    }

    public function getTinggiBadanPasien()
	{
		return $this->tinggi_badan;
	}

	public function setTinggiBadanPasien($tinggi_badan)
	{
		$this->tinggi_badan = $tinggi_badan;
    }
    
    public function getJenisIdentitasPasien()
	{
		return $this->jenis_identitas;
	}

	public function setJenisIdentitasPasien($jenis_identitas)
	{
		$this->jenis_identitas = $jenis_identitas;
    }
    
    public function getNomorIdentitasPasien()
	{
		return $this->nomor_identitas;
	}

	public function setNomorIdentitasPasien($nomor_identitas)
	{
		$this->nomor_identitas = $nomor_identitas;
    }
}