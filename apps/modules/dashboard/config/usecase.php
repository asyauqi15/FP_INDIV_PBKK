<?php

use Uqi\Dashboard\Core\Application\Service\GetAllProvinces\GetAllProvincesService;
use Uqi\Dashboard\Core\Application\Service\GetAllRegencies\GetAllRegenciesService;
use Uqi\Dashboard\Core\Application\Service\GetAllDistricts\GetAllDistrictsService;
use Uqi\Dashboard\Core\Application\Service\GetAllVillages\GetAllVillagesService;
use Uqi\Dashboard\Core\Application\Service\GetAllAkun\GetAllAkunService;
use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunService;
use Uqi\Dashboard\Core\Application\Service\EditAkun\EditAkunService;
use Uqi\Dashboard\Core\Application\Service\FindAkun\FindAkunService;
use Uqi\Dashboard\Core\Application\Service\DeleteAkun\DeleteAkunService;
use Uqi\Dashboard\Core\Application\Service\LoginAkun\LoginAkunService;
use Uqi\Dashboard\Core\Application\Service\AddRumahSakit\AddRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\EditRumahSakit\EditRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\FindRumahSakit\FindRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\DeleteRumahSakit\DeleteRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\GetAllRumahSakit\GetAllRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\AddAntrean\AddAntreanService;
use Uqi\Dashboard\Core\Application\Service\GetAntrean\GetAntreanService;
use Uqi\Dashboard\Core\Application\Service\FindAntrean\FindAntreanService;
use Uqi\Dashboard\Core\Application\Service\NextAntrean\NextAntreanService;
use Uqi\Dashboard\Core\Application\Service\BackAntrean\BackAntreanService;

//===================
//-----Region Usecase
//===================
$di->set('getAllProvincesService', function() use ($di) {
    return new GetAllProvincesService($di->get('sqlServerProvincesRepository'));
});

$di->set('getAllRegenciesService', function() use ($di) {
    return new GetAllRegenciesService($di->get('sqlServerRegenciesRepository'));
});

$di->set('getAllDistrictsService', function() use ($di) {
    return new GetAllDistrictsService($di->get('sqlServerDistrictsRepository'));
});

$di->set('getAllVillagesService', function() use ($di) {
    return new GetAllVillagesService($di->get('sqlServerVillagesRepository'));
});

//=================
//-----Akun Usecase
//=================
$di->set('getAllAkunService', function() use ($di) {
    return new GetAllAkunService($di->get('sqlServerAkunRepository'));
});

$di->set('addAkunService', function() use ($di) {
    return new AddAkunService($di->get('sqlServerAkunRepository'));
});

$di->set('editAkunService', function() use ($di) {
    return new EditAkunService($di->get('sqlServerAkunRepository'));
});

$di->set('findAkunService', function() use ($di) {
    return new FindAkunService($di->get('sqlServerAkunRepository'));
});

$di->set('deleteAkunService', function() use ($di) {
    return new DeleteAkunService($di->get('sqlServerAkunRepository'));
});

$di->set('loginAkunService', function() use ($di) {
    return new LoginAkunService($di->get('sqlServerAkunRepository'));
});

//========================
//-----Rumah Sakit Usecase
//========================
$di->set('addRumahSakitService', function() use ($di) {
    return new AddRumahSakitService($di->get('sqlServerRumahSakitRepository'));
});

$di->set('editRumahSakitService', function() use ($di) {
    return new EditRumahSakitService($di->get('sqlServerRumahSakitRepository'));
});

$di->set('findRumahSakitService', function() use ($di) {
    return new FindRumahSakitService($di->get('sqlServerRumahSakitRepository'));
});

$di->set('deleteRumahSakitService', function() use ($di) {
    return new DeleteRumahSakitService($di->get('sqlServerRumahSakitRepository'));
});

$di->set('getAllRumahSakitService', function() use ($di) {
    return new GetAllRumahSakitService($di->get('sqlServerRumahSakitRepository'));
});

//====================
//-----Antrean Usecase
//====================
$di->set('addAntreanService', function() use ($di) {
    return new AddAntreanService($di->get('sqlServerAntreanRepository'));
});

$di->set('getAntreanService', function() use ($di) {
    return new GetAntreanService($di->get('sqlServerAntreanRepository'));
});

$di->set('findAntreanService', function() use ($di) {
    return new FindAntreanService($di->get('sqlServerAntreanRepository'));
});

$di->set('nextAntreanService', function() use ($di) {
    return new NextAntreanService($di->get('sqlServerAntreanRepository'));
});

$di->set('backAntreanService', function() use ($di) {
    return new BackAntreanService($di->get('sqlServerAntreanRepository'));
});