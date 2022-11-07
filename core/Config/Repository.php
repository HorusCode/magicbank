<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:54
 */

namespace Core\Config;


class Repository
{
    protected static $stored = [];

    public static function store($group, $key, $data)
    {
        if(!isset(static::$stored[$group]) || !is_array(static::$stored[$group]))
        {
            static::$stored[$group] = [];
        }
        static::$stored[$group][$key] = $data;
    }

    public static function retrieve($group, $key)
    {
        return isset(static::$stored[$group][$key]) ? static::$stored[$group][$key] : false;
    }


    public static function retrieveGroup($group)
    {
        return isset(static::$stored[$group]) ? static::$stored[$group] : false;
    }
}