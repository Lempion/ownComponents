<?php

class QueryBuilder
{

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($table, $data)
    {
        $keys = array_keys($data);
        $string = implode(", ", $keys);
        $tags = ":" . implode(", :", $keys);

        $sql = "INSERT INTO {$table} ({$string}) VALUES ({$tags})";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        return $this->pdo->query($sql);
    }


}