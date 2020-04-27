<?php

$namespace = 'Uqi\Dashboard\Presentation\Web\Controller';

/**
 * @var \Phalcon\Mvc\Router $router
 */

//=========
//-----Auth
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

//==========
//-----Admin
//==========

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