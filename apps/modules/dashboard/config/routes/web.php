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

$router->addPost('/logout/submit', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'logout'
]);
