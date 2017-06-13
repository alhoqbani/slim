<?php

namespace App\Helpers;

use PDO;

class Database
{
    
    /**
     * @var Config;
     */
    private $config;
    
    /**
     * @var \PDO;
     */
    private $pdo;
    
    /**
     * Database constructor.
     *
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->openConnection();
    }
    
    private function openConnection()
    {
        $dsn = $this->config->get('database.mysql.driver');
        $dsn .= ":dbnam";
        $dsn .= $this->config->get('database.mysql.user');
        $pdo = new PDO(
            $dsn, $this->config->get('database.mysql.name')
        );
        $this->pdo = $pdo;
    }
    
    public function getPdo()
    {
        return $this->pdo;
    }
}