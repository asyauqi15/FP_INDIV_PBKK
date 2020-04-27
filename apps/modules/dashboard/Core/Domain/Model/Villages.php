<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class Villages
{
    private string $id;

    private string $district_id;

    private string $name;

    public function __construct($id, $district_id, $name)
	{
		$this->id = $id;
		$this->district_id = $district_id;
		$this->name = $name;
    }

    public function getIdVillage()
    {
        return $this->id;
    }

    public function setIdVillage($id)
    {
        $this->id = $id;
    }

    public function getDistrictIdVillage()
    {
        return $this->district_id;
    }

    public function setDistrictIdVillage($district_id)
    {
        $this->district_id = $district_id;
    }

    public function getNameVillage()
    {
        return $this->name;
    }

    public function setNameVillage($name)
    {
        $this->name = $name;
    }
}