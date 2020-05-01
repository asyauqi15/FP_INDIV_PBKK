<?php

$namespace = 'Uqi\Dashboard\Presentation\Web\Controller';

/**
 * @var \Phalcon\Mvc\Router $router
 */

//=========
//-----Akun
//=========
$router->addGet('/register', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'register'
]);

$router->addPost('/register/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'registerSubmit'
]);

$router->addGet('/login', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'login'
]);

$router->addPost('/login/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'loginSubmit'
]);

$router->addGet('/logout', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'logout'
]);

$router->addPost('/editprofil', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'editProfil'
]);

//==========
//-----Admin
//==========

$router->addGet('/adminlist', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'adminList'
]);

$router->addGet('/rumahsakitlist', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'rumahSakitList'
]);

$router->addGet('/adminrumahsakitlist', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'adminRumahSakitList'
]);

$router->addGet('/userlist', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'userList'
]);

$router->addGet('/tes', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'tes'
]);

$router->addGet('/addadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'registerAdmin'
]);

$router->addPost('/addadmin/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'registerAdminSubmit'
]);

$router->addGet('/addrumahsakit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'registerRumahSakit'
]);

$router->addPost('/addrumahsakit/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'registerRumahSakitSubmit'
]);

$router->addGet('/addadminrumahsakit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'registerAdminRumahSakit'
]);

$router->addPost('/addadminrumahsakit/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'registerAdminRumahSakitSubmit'
]);

//====================
//-----AdminRumahSakit
//====================

$router->addGet('/listadminrumahsakit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'adminRumahSakitList'
]);

$router->addGet('/adminrumahsakitadd', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'registerAdminRumahSakit'
]);

$router->addPost('/adminrumahsakitadd/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'registerAdminRumahSakitSubmit'
]);

$router->addGet('/listpasien', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'pasienList'
]);

$router->addGet('/listantrean', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'antreanList'
]);

$router->addGet('/profilrumahsakit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'profilRumahSakit'
]);

$router->addPost('/profilrumahsakit/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'profilRumahSakitSubmit'
]);

$router->addPost('/bukatutupantrean/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'adminRumahSakit',
    'action' => 'bukaTutupAntreanSubmit'
]);