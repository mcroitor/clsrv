<?php

include_once '../core/mcapi.interface.php';

/**
 * _manage users_
 * registration:
 *      user::create
 */
class user implements mcapi {

    var $conn;

    function __construct(db $conn) {
        $this->conn = $conn;
    }

    function try_check_login($login) {
        $q = "SELECT count(*) FROM user_tbl WHERE user_login LIKE '{$login}'";
        if (count($this->conn->do_query($q)) > 0) {
            $response = "{'error':'login {$login} is used'}";
            header("HTTP/1.0 403 Forbidden");
            header("Content-Type: text/html; charset=utf-8");
            header("Content-Encoding: UTF-8");
            header("Content-Length: " . strlen($response));
            echo $response;
            exit();
        }
    }

    function try_check_email($email) {
        $q = "SELECT count(*) FROM user_tbl WHERE user_email LIKE '{$email}'";
        if (count($this->conn->do_query($q)) > 0) {
            $response = "{'error':'email {$email} is used'}";
            header("HTTP/1.0 403 Forbidden");
            header("Content-Type: text/html; charset=utf-8");
            header("Content-Encoding: UTF-8");
            header("Content-Length: " . strlen($response));
            echo $response;
            exit();
        }
    }

    public function create($param) {
        //echo "<h3>create</h3>";
        $login = filter_input(INPUT_POST, "login");
        $password = filter_input(INPUT_POST, "password");
        $email = filter_input(INPUT_POST, "email");
        
        //print_r($_REQUEST);

        $this->try_check_login($login);
        $this->try_check_email($email);
    }

    public function delete($param) {
        echo "<h3>create</h3>";
    }

    public function get($param) {
        echo "<h3>create</h3>";
    }

    public function update($param) {
        echo "<h3>create</h3>";
    }

}
