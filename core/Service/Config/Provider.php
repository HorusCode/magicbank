<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:48
 */

namespace Core\Service\Config;


use Core\Service\AbstractProvider;
use Core\Config\Config;


class Provider extends AbstractProvider
{
    public $serviceName = 'config';

    public function init()
    {
        $config['main'] = Config::file('main');
        $config['database'] = Config::file('database');
        $this->di->set($this->serviceName, $config);
    }
}