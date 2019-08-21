<?php

namespace App\Core\Database;

use PDO;

class DB
{
    /**
     * Make a connection to the database.
     *
     * @param  array $config
     * @return PDO
     */
    public static function connect(array $config)
    {
        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
