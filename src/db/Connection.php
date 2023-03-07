<?php

namespace Src\Db;

use PDO;

class Connection
{
    private $conn;

    private function setConnection()
    {
        $this->conn = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_vsuet02", "host1323541_vsuet", "5q3tfcrK");
    }

    public function exec(string $sql)
    {
        $this->setConnection();

        $result = [];

        foreach ($this->conn->query($sql) as $row) {
            $result[] = $row;
        }

        return $result;
    }

    static function getResult(string $sql)
    {
        $conn = new static();

        return $conn->exec($sql);
    }
}
