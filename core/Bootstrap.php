<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 10.01.2019
 * Time: 22:30
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/Function.php';

use Core\DI\DI;
use Core\Main;

class_alias('Core\\Template\\Asset', 'Asset'); //Алиас, чтобы не писать полный путь
class_alias('Core\\Template\\View', 'View'); //Алиас, чтобы не писать полный путь
class_alias('Core\\Helper\\Common', 'Common'); //Алиас, чтобы не писать полный путь


try { //Создание экземляра DI
    $di = new DI(); //Создание di

    $services = require __DIR__ . '/../Config/Service.php'; //Файл всех сервисов

    foreach ($services as $service) { //Полученные файлы по-очереди врубаем
        $provider = new $service($di); //Отправляем в конструктор контейнер di
        $provider->init(); //Запускаем сервис
    }

    $main = new Main($di); //Запускаем управляющий класс
    $main->run();
} catch (\ErrorException $e) {
    echo $e->getMessage(); //Если что, то выбиваем ошибку
}