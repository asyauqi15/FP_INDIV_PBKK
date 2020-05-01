<?php
namespace Uqi\Dashboard\Core\Application\Service\FindAkun;

class FindAkunRequest
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
}