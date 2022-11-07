<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 15:20
 */

namespace Core\Template;


class Component
{
    public static function load($name, $data = [])
    {
        $viewFile = path('view').'/'.$name;

        if(is_file($viewFile)) {
            extract(array_merge($data, View::getData()));
            require $viewFile;
        } else {
            throw new \Exception(
                sprintf('Нет файла вида по пути <strong>%s</strong>, алло дядь!', $viewFile)
            );
        }
    }
}