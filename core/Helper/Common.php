<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 10.01.2019
 * Time: 23:33
 */

namespace Core\Helper;


class Common
{
    public static function isPost()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            return true;
        }
        return false;
    }

    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }


    public static function getPathUrl()
    {
        $pathUrl = $_SERVER['REQUEST_URI'];
        if($position = strpos($pathUrl, '?'))
        {
            $pathUrl = substr($pathUrl, 0, $position);
        }
        return $pathUrl;
    }


    private static function searchMathString($string, $find)
    {
        if(strripos($string, $find) !== false)
        {
            return true;
        }
        return false;
    }

    private static function searchFirstMathString($string, $find)
    {
        if(strpos($string, $find) !== false)
        {
            return true;
        }
        return false;
    }

    public  static  function isLinkActive($key)
    {
        if(self::searchMathString($_SERVER['REQUEST_URI'], $key))
        {
            return true;
        }
        return false;
    }

    public static function linkValidate($key)
    {
        if(!self::isLinkValidate($key)) {
            header('Location: /error/401');
            exit;
        }
    }

    public static function jsonAnswer($arr = [])
    {
        echo json_encode($arr, JSON_UNESCAPED_UNICODE);
        exit;
    }

    public static function getValue($val, $key) {

        return ($val[$key] ?? '') ? $val[$key] : '';
    }


    private static function isLinkValidate($key)
    {
        if(self::searchFirstMathString($_SERVER['REQUEST_URI'], $key))
        {
            return true;
        }
        return false;
    }
}