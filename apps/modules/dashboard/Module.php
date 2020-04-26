<?php

namespace Uqi\Dashboard;

use Phalcon\Di\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([

            'Uqi\Dashboard\Core\Domain\Event' => __DIR__ . '/Core/Domain/Event',
            'Uqi\Dashboard\Core\Domain\Model' => __DIR__ . '/Core/Domain/Model',
            'Uqi\Dashboard\Core\Domain\Repository' => __DIR__ . '/Core/Domain/Repository',
            'Uqi\Dashboard\Core\Domain\Service' => __DIR__ . '/Core/Domain/Service',

            'Uqi\Dashboard\Core\Application\Service' => __DIR__ . '/Core/Application/Service',
            'Uqi\Dashboard\Core\Application\EventSubscriber' => __DIR__ . '/Core/Application/EventSubscriber',

            'Uqi\Dashboard\Infrastructure\Persistence' => __DIR__ . '/Infrastructure/Persistence',

            'Uqi\Dashboard\Presentation\Web\Controller' => __DIR__ . '/Presentation/Web/Controller',
            'Uqi\Dashboard\Presentation\Web\Validator' => __DIR__ . '/Presentation/Web/Validator',
            'Uqi\Dashboard\Presentation\Api\Controller' => __DIR__ . '/Presentation/Api/Controller',
            
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di = null)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
        include_once __DIR__ . '/config/repository.php';
        include_once __DIR__ . '/config/usecase.php';
    }
}