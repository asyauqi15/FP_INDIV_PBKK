<?php

namespace Uqi\Dashboard\Core\Domain\Model;

class Provinces
{
    private string $id;

    private string $name;

    public function __construct($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
    }

    public function getIdProvince()
    {
        return $this->id;
    }

    public function setIdProvince($id)
    {
        $this->id = $id;
    }

    public function getNameProvince()
    {
        return $this->name;
    }

    public function setNameProvince($name)
    {
        $this->name = $name;
    }
}