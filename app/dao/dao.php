<?php

namespace app\dao;

use app\model\model;
use PDO;

class dao{
    private $connection;

    public function __autoload()
    {
        $dsn = "mysql:dbname=" . $_ENV['db']['name'] . "; host: " . $_ENV['db']['host'];

        $this->connection = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['user']);
    }

    public function insert(model $model) : void
    {
        $sql = "insert into response (file) values (?);";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();
    }
}