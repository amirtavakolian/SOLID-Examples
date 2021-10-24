<?php 
require_once "autoloader.php";

class Authentication{

    public $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;    
    }

    public function query()
    {
        return $this->connection->query();
    }
}

$obj = new Authentication(new MysqlConnection);
echo $obj->query();