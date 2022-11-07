<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 14:30
 */

namespace Core;
use Core\Helper\Common;
use Core\Router\DispatchedRoute;

class Main
{
    public $router;
    private $di;

    public function __construct($di)
    {
        $this->di = $di; //Кидаем данные в свойства ди
        $this->router = $this->di->get('router'); //Получаем так же данные из сервиса router
    }

    public function run()
    {
        try {
            require_once 'config/Route.php'; //Подключаем

            $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

            if($routerDispatch == null) {
                $routerDispatch = new DispatchedRoute('ErrorController:page404');
            }

            list($class, $action) = explode(':', $routerDispatch->getController(), 2);
            $controller = '\\Controller\\'.$class;
            $parameters = $routerDispatch->getParameters();

            call_user_func_array([new $controller($this->di), $action], $parameters);

        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
}