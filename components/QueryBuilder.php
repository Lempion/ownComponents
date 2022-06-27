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

    public function edit($table, $data, $id)
    {
        foreach ($data as $key => $value) {
            $string .= $key . "=:" . $key . ',';
        }

        $string = rtrim($string, ",");

        $data['id'] = $id;

        $sql = "UPDATE {$table} SET {$string} WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);

    }

    public function remove($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        return $this->pdo->query($sql);
    }

    public function getOne($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}