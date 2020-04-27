<?php

namespace Uqi\Dashboard\Core\Domain\Repository;

use Uqi\Dashboard\Core\Domain\Model\RumahSakit;

interface RumahSakitRepositoryInterface 
{
    public function getAllRumahSakit() : ?array;

    public function addRumahSakit( RumahSakit $rumah_sakit );
}