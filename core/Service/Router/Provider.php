<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:48
 */

namespace Core\Service\Router;


use Core\Service\AbstractProvider;
use Core\Router\Router;


class Provider extends AbstractProvider
{
    public $serviceName = 'router';

    public function init()
    {
        $router = new Router('http://magicbank/');
        $this->di->set($this->serviceName, $router);
    }
}