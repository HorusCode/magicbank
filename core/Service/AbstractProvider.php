<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:46
 */

namespace Core\Service;


use Core\DI\DI;

abstract class AbstractProvider
{
    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    abstract function init();
}