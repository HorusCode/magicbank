<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:48
 */

namespace Core\Service\View;


use Core\Service\AbstractProvider;
use Core\Template\View;



class Provider extends AbstractProvider
{
    public $serviceName = 'view';

    public function init()
    {

        $view = new View($this->di);
        $this->di->set($this->serviceName, $view);
    }
}