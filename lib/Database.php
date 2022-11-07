<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 09.01.2019
 * Time: 19:58
 */

namespace lib;
use PDO;

class Database
{
    protected $db;

    public function __construct()
    {
        $config = require 'config/Database.php';
        $this->db = new PDO("mysql:host={$config['host']};
                                 dbname={$config['dbname']};
                                 charset={$config['charset']}",
                                 $config['user'],
                                 $config['password']);
    }
}