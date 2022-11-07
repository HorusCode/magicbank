<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 09.01.2019
 * Time: 22:01
 */

namespace core;

use Core\Database\QueryBuilder;
use Core\DI\DI;
use lib\Database;

abstract class Model
{
    protected $db;
    protected $di;
    protected $config;

    public $queryBuilder;


    public function __construct(DI $di)
    {
       $this->di = $di;
       $this->db = $this->di->get('db');
       $this->config = $this->di->get('config');

       $this->queryBuilder = new QueryBuilder();
    }
}