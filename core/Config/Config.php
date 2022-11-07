<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 12:53
 */

namespace Core\Config;


class Config
{
    public static function item($key, $group = 'main')
    {
        if(!Repository::retrieve($group, $key)) {
            self::file($group);
        }

        return Repository::retrieve($group, $key);
    }

    public static function group($group)
    {
        if(!Repository::retrieveGroup($group)) {
            self::file($group);
        }
        return Repository::retrieveGroup($group);
    }

    public static function file($group = 'main')
    {
        $path = path('config').DIRECTORY_SEPARATOR.$group.'.php';

        if(file_exists($path)) {
            $items = require $path;

            if(is_array($items)) {
                foreach ($items as $key => $value) {
                    Repository::store($group, $key, $value);
                }

                return true;
            } else {
                throw new \Exception(
                    sprintf('Файл конфигурации <strong>%s</strong> не является массивом', $path)
                );
            }
        } else {
            throw new \Exception(
                sprintf('Не найден файл  <strong>%s</strong>', $path)
            );
        }
        return false;
    }
}