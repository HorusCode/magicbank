<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 10.01.2019
 * Time: 23:11
 */

namespace Core\Router;


class DispatchedRoute
{
    private $controller;
    private $parameters;

    public function __construct($controller, $parameters = [])
    {
        $this->controller = $controller;
        $this->parameters = $parameters;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getParameters()
    {
        return $this->parameters;
    }
}