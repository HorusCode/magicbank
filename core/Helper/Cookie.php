<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 21.01.2019
 * Time: 21:12
 */

namespace Core\Helper;


use Core\Config\Config;

class Cookie
{
    public static function set($key, $value, $time = 31536000)
    {
        setcookie($key, $value, time() + $time, "/");
    }

    public static function delete($key)
    {
        if(isset($_COOKIE[$key])) {
            self::set($key, '', -3600);
            unset($_COOKIE[$key]);
        }
    }

    public static function get($key)
    {
        if(isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        return null;
    }
}