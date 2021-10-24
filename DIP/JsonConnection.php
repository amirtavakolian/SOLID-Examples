<?php 
require_once "ConnectionInterface.php";

class JsonConnection implements ConnectionInterface{

    private $connection;

    public function __construct()
    {
          
    }
    
    public function query(){
        return "Json Query to database";
    }

    public function update(){
        return "Json update database";

    }
    
}