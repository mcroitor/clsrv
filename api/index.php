<?php
/**
 * The default page for API.
 */

include_once '../config.php';
include_once '../core/autoload.php';
include_once '../core/db.class.php';

$conn = new db($dbcfg);
// 1. get transmitted data
//      all data ara transmitted with POST method
//      URL can have parameters, this parameters switch actions
//      basic parameter is q (query):
//      <URL>/api/?q=<QUERY>
$q = filter_input(INPUT_GET, "q");

// 2. parse data
//      parameter q=<QUERY> has the next structure:
//      <QUERY> = <DESTINATION>/<ACTION>/[<ID>]
$OO = explode("/", $q);

// 3. do action
//      create object <DESTINATION> $dest and call $dest-><ACTION>(<ID>)
/* TODO #API01: check existance! */
if(empty($OO[0]) == true){
    echo "<p>no module loaded</p>";
    exit();
}
if(empty($OO[1]) == true){
    echo "<p>no method specified</p>";
    exit();
}

$class_name = $OO[0];
$method_name = $OO[1];
$param = empty($OO[2]) == true ? null: $OO[2];

$dest = new $class_name($conn);
$result = $dest->$method_name($param);

// 4. return response
/* TODO #API02: what about headers? */
echo $result;
