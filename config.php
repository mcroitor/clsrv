<?php
/**
 * The configuration file.
 */
$dbtype = "mysql";
$dbname = "clsrv_db";
$dbhost = "localhost";
$dbspec = "";

$dsn = "{$dbtype}:dbname={$dbname};host={$dbhost};{$dbspec}";

/**
 * dsn examples
 * # mysql: 'mysql:dbname=<dbanme>;host=<host>'
 * # postgre: 'pgsql:dbname=<dbanme>;host=<host>'
 * # sqlite: 'sqlite:<path/to/file>'
 * # oracle (OCI): 'oci:dbname=<tns_here>'
 */

$dbcfg = [
    "dsn" => $dsn,
    "username" => "root",
    "password" => "password"
];
