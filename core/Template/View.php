<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 14:54
 */

namespace Core\Template;

use Core\Config\Config;
use Core\DI\DI;

class View
{
    public $di;
    public $asset;

    protected static $data = [];

    const RULES_NAME_FILE = [
        'header' => 'header%s.php'
    ];



    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->asset = new Asset();
    }


    public static function header($name = null, $data = [])
    {
        $name = (string)$name;
        $file = self::detectNameFile($name, __FUNCTION__);
        Component::load('layouts/'.$file, $data);
    }

    public static function footer($name = null)
    {
        //$name = (string)$name;
        //$file = self::detectNameFile($name, __FUNCTION__);
        $file = 'footer.php';
        Component::load('layouts/'.$file);
    }


    public static function getData()
    {
        return static::$data;
    }


    public static function setData(array  $data)
    {
        static::$data = $data;
    }

    public static function detectNameFile($name, $func)
    {
        return empty(trim($name)) ? $func : sprintf(self::RULES_NAME_FILE[$func], $name);
    }


    public function render($view, $data = [])
    {

        $filePath = self::getLayoutPath('function');
        if(file_exists($filePath)) {
            require_once $filePath;
        } else {
            throw new \InvalidArgumentException(
                print_r("В папке layouts должен лежать functions.php!")
            );
        }

        $viewPath = $this->getViewPath($view);
        if(!is_file($viewPath)) {
            throw new \InvalidArgumentException(
                sprintf("Файл %s не найден!", $viewPath)
            );
        }

        $this->setData($data);
        extract($data);
        ob_start();
        ob_implicit_flush(0);

        try{
            require($viewPath);
        } catch (\Exception $e) {
            ob_end_clean();
            throw $e;
        }

        echo ob_get_clean();

    }

   public static function getUrl()
   {
       $baseUrl = Config::item('baseUrl');
       return $baseUrl;
   }

    private function getViewPath($view) {
        return path('view').'/'.$view.'.php';
    }

    private function getLayoutPath($fileName)
    {
        return path('view').'/layouts/'.$fileName.'.php';
    }

}