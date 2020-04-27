<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class Akun
{
    private int $id_akun;
    
    private int $id_rumah_sakit;
    
    private string $id_villages;

    private int $id_pasien;

	private string $username;

	private string $email;

	private string $password;

    private int $jenis_akun;
    
    private int $jenis_identitas;
    
    private string $nomor_identitas;

    private string $nama_lengkap;

    private string $alamat_lengkap;

    private int $jenis_kelamin;

    public function __construct($username, $email, $password, $jenis_akun, $id_akun = 0, $id_rumah_sakit = 0, $id_villages = "", $id_pasien = 0, $jenis_identitas = 0, $nomor_identitas = "", $nama_lengkap = "",
        $alamat_lengkap = "", $jenis_kelamin = 0)
	{
		$this->id_akun = $id_akun;
		$this->id_rumah_sakit = $id_rumah_sakit;
		$this->id_villages = $id_villages;
		$this->id_pasien = $id_pasien;
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->jenis_akun = $jenis_akun;
		$this->jenis_identitas = $jenis_identitas;
		$this->nomor_identitas = $nomor_identitas;
		$this->nama_lengkap = $nama_lengkap;
		$this->alamat_lengkap = $alamat_lengkap;
		$this->jenis_kelamin = $jenis_kelamin;
	}

	public function getIdAkun()
	{
		return $this->id_akun;
	}

	public function setIdAkun($id_akun)
	{
		$this->id_akun = $id_akun;
	}

    public function getIdRumahSakitAkun()
	{
		return $this->id_rumah_sakit;
	}

	public function setIdRumahSakitAkun($id_rumah_sakit)
	{
		$this->id_rumah_sakit = $id_rumah_sakit;
    }
    
    public function getIdVillagesAkun()
	{
		return $this->id_villages;
	}

	public function setIdVillagesAkun($id_villages)
	{
		$this->id_villages = $id_villages;
    }
    
    public function getIdPasienAkun()
	{
		return $this->id_pasien;
	}

	public function setIdPasienAkun($id_pasien)
	{
		$this->id_pasien = $id_pasien;
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
    
    public function getJenisIdentitasAkun()
	{
		return $this->jenis_identitas;
	}

	public function setJenisIdentitasAkun($jenis_identitas)
	{
		$this->jenis_identitas = $jenis_identitas;
    }
    
    public function getNomorIdentitasAkun()
	{
		return $this->nomor_identitas;
	}

	public function setNomorIdentitasAkun($nomor_identitas)
	{
		$this->nomor_identitas = $nomor_identitas;
    }
    
    public function getNamaLengkapAkun()
	{
		return $this->nama_lengkap;
	}

	public function setNamaLengkapAkun($nama_lengkap)
	{
		$this->nama_lengkap = $nama_lengkap;
    }
    
    public function getAlamatLengkapAkun()
	{
		return $this->alamat_lengkap;
	}

	public function setAlamatLengkapAkun($alamat_lengkap)
	{
		$this->alamat_lengkap = $alamat_lengkap;
    }
    
    public function getJenisKelaminAkun()
	{
		return $this->jenis_kelamin;
	}

	public function setJenisKelaminAkun($jenis_kelamin)
	{
		$this->jenis_kelamin = $jenis_kelamin;
	}
}