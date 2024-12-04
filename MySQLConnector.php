<?php

use Doctrine\DBAL\DriverManager;

class MySQLConnector
{
    public static function connect()
    {
        $connection = [
            'dbname' => 'experience',
            'user' => 'user',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
            'port' => 3306
        ];

        return DriverManager::getConnection($connection);
    }
}