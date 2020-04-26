<?php

use Uqi\Dashboard\Infrastructure\Persistence\SqlServerProvincesRepository;
use Uqi\Dashboard\Infrastructure\Persistence\SqlServerRegenciesRepository;
use Uqi\Dashboard\Infrastructure\Persistence\SqlServerDistrictsRepository;
use Uqi\Dashboard\Infrastructure\Persistence\SqlServerVillagesRepository;
use Uqi\Dashboard\Infrastructure\Persistence\SqlServerAkunRepository;
use Uqi\Dashboard\Infrastructure\Persistence\SqlServerRumahSakitRepository;
use Uqi\Dashboard\Infrastructure\Persistence\SqlServerAntreanRepository;
use Uqi\Dashboard\Infrastructure\Persistence\SqlServerPasienRepository;

$di->set('sqlServerProvincesRepository', function() use ($di) {
    return new SqlServerProvincesRepository($di->get('db'));
});

$di->set('sqlServerRegenciesRepository', function() use ($di) {
    return new SqlServerRegenciesRepository($di->get('db'));
});

$di->set('sqlServerDistrictsRepository', function() use ($di) {
    return new SqlServerDistrictsRepository($di->get('db'));
});

$di->set('sqlServerVillagesRepository', function() use ($di) {
    return new SqlServerVillagesRepository($di->get('db'));
});

$di->set('sqlServerAkunRepository', function() use ($di) {
    return new SqlServerAkunRepository($di->get('db'));
});

$di->set('sqlServerRumahSakitRepository', function() use ($di) {
    return new SqlServerRumahSakitRepository($di->get('db'));
});

$di->set('sqlServerAntreanRepository', function() use ($di) {
    return new SqlServerAntreanRepository($di->get('db'));
});

$di->set('sqlServerPasienRepository', function() use ($di) {
    return new SqlServerPasienRepository($di->get('db'));
});