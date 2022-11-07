<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 08.01.2019
 * Time: 23:13
 */
namespace Core\Router;




class Router
{



    private $routes = [];
    private $host;
    private $dispatcher;


    public function __construct($host)
    {
        $this->host = $host;
    }


    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern' => $pattern,
            'controller' => $controller,
            'method' => $method,
        ];
    }


    public function dispatch($method, $uri)
    {
        return $this->getDispatcher()->dispatch($method,$uri);
    }

    public function getDispatcher()
    {
        if($this->dispatcher == null) {
            $this->dispatcher = new UrlDispatcher();
            foreach ($this->routes as $rout) {
                $this->dispatcher->register($rout['method'], $rout['pattern'], $rout['controller']);
            }
        }
        return $this->dispatcher;
    }

}