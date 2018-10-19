<?php

class db {
    var $conn;
    
    public function __construct($param) {
        $this->conn = new PDO($param["dsn"], $param["username"], $param["password"], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public function do_query($query, $return_value = true){
        /* TODO #DAT01: rewrite to preparing statements */
        $result = $this->conn->query($query);
        
        if($return_value === true && isset($result) === true){
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return null;
    }
}
