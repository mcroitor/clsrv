<?php

// 1. get transmitted data
//      all data ara transmitted with POST method
//      URL can have parameters, this parameters switch actions
//      basic parameter is q (query):
//      <URL>/api/?q=<QUERY>
$q = filter_input(INPUT_GET, "q");

// 2. parse data
//      parameter q=<QUERY> has the next structure:
//      <QUERY> = <DESTINATION>/<ACTION>/[<ID>]
list($destclass, $action, $param) = split("/", $q);

// 3. do action
//      create object <DESTINATION> $dest and call $dest-><ACTION>(<ID>)
/* TODO #API01: check existance! */ 
$dest = new $destclass();
$result = $dest->$action($param);

// 4. return response
/* TODO #API02: what about headers? */
echo $result;
