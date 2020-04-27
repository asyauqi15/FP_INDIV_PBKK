<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class Districts
{
    private string $id;

    private string $regency_id;

    private string $name;

    public function __construct($id, $regency_id, $name)
	{
		$this->id = $id;
		$this->regency_id = $regency_id;
		$this->name = $name;
    }

    public function getIdDistrict()
    {
        return $this->id;
    }

    public function setIdDistrict($id)
    {
        $this->id = $id;
    }

    public function getRegencyIdDistrict()
    {
        return $this->regency_id;
    }

    public function setRegencyIdDistrict($regency_id)
    {
        $this->regency_id = $regency_id;
    }

    public function getNameDistrict()
    {
        return $this->name;
    }

    public function setNameDistrict($name)
    {
        $this->name = $name;
    }
}