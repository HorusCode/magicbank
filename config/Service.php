<?php
//Пишем здесь все сервисы
return [
    Core\Service\Database\Provider::class,
    Core\Service\Router\Provider::class,
    Core\Service\Config\Provider::class,
    Core\Service\Request\Provider::class,
    Core\Service\Load\Provider::class,
    Core\Service\View\Provider::class
];