<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 15:58
 */

namespace Controller;


class ErrorController
{
    public function page404()
    {
        echo "404 page";
    }

    public function getError($num)
    {
        $page = 'page' . $num;

        (method_exists(__CLASS__, $page)) ? $this->{$page}() : $this->page404();
    }

    private function page401()
    {
        echo 'Вы не имеете доступ';
    }
}