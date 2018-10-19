<?php

echo "<h2>Installation script</h2>";

/* TODO #INS01: write installation script */
include_once '../config.php';
include_once '../core/classes/db.class.php';

$db = new db($dbcfg);

// install config
$q = "CREATE TABLE config_tbl ("
        . "variable_id INT NOT NULL AUTO_INCREMENT, "
        . "variable_name VARCHAR(255) NOT NULL,"
        . "variable_value VARCHAR(255) NOT NULL,"
        . "variable_type VARCHAR(255) NOT NULL,"
        . "PRIMARY KEY(variable_id))";
$db->do_query($q, false);

// user module
$q = "CREATE TABLE user_tbl ("
        . "user_id INT NOT NULL AUTO_INCREMENT, "
        . "user_login VARCHAR(255) NOT NULL,"
        . "user_password VARCHAR(255) NOT NULL,"
        . "user_email VARCHAR(255) NOT NULL,"
        . "PRIMARY KEY(user_id))";
$db->do_query($q, false);

// article module
$q = "CREATE TABLE article_tbl ("
        . "article_id INT NOT NULL AUTO_INCREMENT, "
        . "article_title VARCHAR(255) NOT NULL,"
        . "article_body TEXT NOT NULL,"
        . "article_published DATE NOT NULL,"
        . "article_author_id INT NOT NULL,"
        . "PRIMARY KEY(article_id))";
$db->do_query($q, false);