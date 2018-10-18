<?php

echo "<h2>Installation script</h2>";

/* TODO #INS01: write installation script */
include_once '../config.php';
include_once '../core/classes/db.class.php';

$db = new db($dbcfg);

// user module
$q = "CREATE TABLE user_tbl ("
        . "user_id INT NOT NULL AUTO_INCREMENT, "
        . "user_login VARCHAR(255) NOT NULL,"
        . "user_password VARCHAR(255) NOT NULL,"
        . "user_email VARCHAR(255) NOT NULL,"
        . "PRIMARY KEY(user_id))";
$db->do_query($q, false);