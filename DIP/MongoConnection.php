<?php 
require_once "ConnectionInterface.php";

class MongoConnection implements ConnectionInterface{

    private $connection;

    public function __construct()
    {
          
    }
    
    public function query(){
        return "Mongo Query to database";
    }

    public function update(){
        return "Mongo update database";

    }
    
}