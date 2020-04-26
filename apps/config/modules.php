<?php

return array(
    'dashboard' => [
        'namespace' => 'Uqi\Dashboard',
        'webControllerNamespace' => 'Uqi\Dashboard\Presentation\Web\Controller',
        'apiControllerNamespace' => '',
        'className' => 'Uqi\Dashboard\Module',
        'path' => APP_PATH . '/modules/dashboard/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'index',
        'defaultAction' => 'index'
    ],
);