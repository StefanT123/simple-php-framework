<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll($table)
    {
        $statement = $this->db->prepare('SELECT * FROM ' . $table);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
