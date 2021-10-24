<?php 

require_once "ConnectionInterface.php";

class MysqlConnection implements ConnectionInterface{

    private $connection;

    public function __construct()
    {
          
    }
    
    public function query(){
        return "Mysql Query to database";
    }

    public function update(){
        return "Mysql update database";

    }
    
}