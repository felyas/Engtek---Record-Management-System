<?php

namespace Core;

use PDO;

class Database
{

    public $conn;
    public $stmt;

    public function __construct($config, $username = 'root', $password = '')
    {
        try {
            $dns = "mysql:" . http_build_query($config, '', ';');

            $this->conn = new PDO($dns, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

        } catch (\PDOException $e) {
            // header("Location: /500");
            abort(500);
        }
    }

    public function query($query, $params = [])
    {
        $this->stmt = $this->conn->prepare($query);
        $this->stmt->execute($params);

        return $this;
    }

    public function read()
    {
        return $this->stmt->fetch();
    }
    
    public function fetchOrFailed()
    {
        $result = $this->stmt->fetch();
        if(!$result) {
            abort();
        }

        return $result;
    }

    public function readAll()
    {
        return $this->stmt->fetchAll();
    }

}
