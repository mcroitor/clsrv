<?php

class db {
    var $conn;
    
    public function __construct($param) {
        $this->conn = new PDO($param["dsn"], $param["username"], $param["password"]);
    }

    public function select($fields, $conditions, $limits){
        
    }
    public function update($fields, $conditions, $limits){
        
    }
    public function delete($conditions){
        
    }
    public function create(){
        
    }
    protected function do_query($query){
        /* TODO #DAT01: rewrite to preparing statements */
        return $this->conn->query($query);
    }
}
