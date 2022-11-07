<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 09.01.2019
 * Time: 17:45
 */

namespace Core;

use Core\DI\DI;

abstract class Controller
{
    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;

        $this->initVars();
    }

    public function __get($key)
    {
        return $this->di->get($key);
    }

    public function initVars()
    {
        $vars = array_keys(get_object_vars($this));
        foreach ($vars as $var) {
            if($this->di->has($var)) {
                $this->{$var} = $this->di->get($var);
            }
        }
        return $this;
    }

}