<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:48
 */

namespace Core\Service\Load;


use Core\Load;
use Core\Service\AbstractProvider;



class Provider extends AbstractProvider
{
    public $serviceName = 'load';

    public function init()
    {
        $load = new Load($this->di);
        $this->di->set($this->serviceName, $load);
    }
}