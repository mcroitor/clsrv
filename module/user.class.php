<?php

include_once '../core/interfaces/mcapi.interface.php';

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
        $result = $this->conn->do_query($q);
        if ($result[0][0] > 0) {
            $response = "{'error':'login {$login} is used'}";
            httpResponse($response, 403);
        }
    }

    function try_check_email($email) {
        $q = "SELECT count(*) FROM user_tbl WHERE user_email LIKE '{$email}'";
        $result = $this->conn->do_query($q);
        if ($result[0][0] > 0) {
            $response = "{'error':'email {$email} is used'}";
            httpResponse($response, 403);
        }
    }

    private static function check_empty($login, $password, $email) {
        $result = [];
        $login = trim($login);
        $password = trim($password);
        $email = trim($email);

        if (strlen($login) === 0) {
            $result[] = "'login is empty'";
        }
        if (strlen($password) === 0) {
            $result[] = "'password is empty'";
        }
        if (strlen($email) === 0) {
            $result[] = "'email is empty'";
        }
        if (count($result) > 0) {
            $response = "{'error':[" . implode(",", $result) . "]}";
            httpResponse($response, 403);
        }
    }

    public function create($param) {
        $login = filter_input(INPUT_POST, "login");
        $password = filter_input(INPUT_POST, "password");
        $email = filter_input(INPUT_POST, "email");

        $this->check_empty($login, $password, $email);
        $this->try_check_login($login);
        $this->try_check_email($email);

        $this->conn->do_query("INSERT INTO user_tbl VALUES (null, '{$login}', '{$password}', '{$email}')", false);
        
        $response = "{'message': 'user {$login} registered successfully'}";
        httpResponse($response, 201);
        //header("HTTP/1.0 201 Created");
    }

    public function delete($param) {
        echo "<h3>delete</h3>";
    }

    public function get($param) {
        if(isset($_SESSION["login"]) == true){
            httpResponse("you are autenticated!", 400);
        }
        $login = filter_input(INPUT_POST, "login");
        $password = filter_input(INPUT_POST, "password");

        $q = "SELECT count(*) FROM user_tbl "
                . "WHERE user_login LIKE '{$login}' "
                . "AND user_password LIKE '{$password}'";
        $result = $this->conn->do_query($q);

        if ($result[0][0] === 0) {
            $response = "{'error':'unknown autentication pair login:password'}";
            httpResponse($response, 401);
        }
        $_SESSION["login"] = $login;
        httpResponse("user {$login} autenticated successfully!", 200);
    }

    public function update($param) {
        echo "<h3>update</h3>";
    }

    public function login($param) {
        $this->get($param);
    }

    public function logout($param) {
        if(isset($_SESSION["login"]) === false){
            httpResponse("you are not autenticated!", 400);
        }
        unset($_SESSION["login"]);
        httpResponse("loged out!", 200);
    }
}
