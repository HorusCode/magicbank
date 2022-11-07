<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:48
 */

namespace Core\Service\Request;


use Core\Service\AbstractProvider;
use Core\Request\Request;


class Provider extends AbstractProvider
{
    public $serviceName = 'request';

    public function init()
    {
        $request = new Request();
        $this->di->set($this->serviceName, $request);
    }
}