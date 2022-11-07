<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 13:18
 */

namespace Core\Database;

use \PDO;
use Core\Config\Config;

class Connection
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = Config::group('database');
        $dsn = "mysql:host={$config['host']};dbname={$config['db_name']};charset={$config['charset']}";
        $this->link = new PDO($dsn, $config['username'], $config['password']);
        return $this;
    }

    public function execute($sql, $values = [])
    {
        $statement = $this->link->prepare($sql);
        return $statement->execute($values);
    }

    public function query($sql, $values = [])
    {
        $statement = $this->link->prepare($sql);
        $statement->execute($values);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if($result === false) {
            return [];
        }

        return $result;
    }

    public function lastInsertId()
    {
        return $this->link->lastInsertId();
    }
}