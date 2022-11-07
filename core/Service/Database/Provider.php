<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:48
 */

namespace Core\Service\Database;


use Core\Service\AbstractProvider;
use Core\Database\Connection;


class Provider extends AbstractProvider
{
    public $serviceName = 'db';

    public function init()
    {
        $db = new Connection();
        $this->di->set($this->serviceName, $db);
    }
}