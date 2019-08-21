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

    public function insert($table, array $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->db->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            var_dump($e);
            die();
        }
    }
}
