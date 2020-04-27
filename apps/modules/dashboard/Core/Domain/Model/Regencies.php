<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class Regencies
{
    private string $id;

    private string $province_id;

    private string $name;

    public function __construct($id, $province_id, $name)
	{
		$this->id = $id;
		$this->province_id = $province_id;
		$this->name = $name;
    }

    public function getIdRegency()
    {
        return $this->id;
    }

    public function setIdRegency($id)
    {
        $this->id = $id;
    }

    public function getProvinceIdRegency()
    {
        return $this->province_id;
    }

    public function setProvinceIdRegency($province_id)
    {
        $this->province_id = $province_id;
    }

    public function getNameRegency()
    {
        return $this->name;
    }

    public function setNameRegency($name)
    {
        $this->name = $name;
    }
}