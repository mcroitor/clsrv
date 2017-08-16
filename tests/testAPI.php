<?php

$data = array ('login' => 'tester', 'password' => 'tester', 'email' => 'i@love.you');
$http_data = http_build_query($data);

$url = "http://localhost/clsrv/api/?q=user/create/1";

$context_options = array (
        'http' => array (
            'method' => 'POST',
            'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($http_data) . "\r\n",
            'content' => $http_data
            )
        );

$context = stream_context_create($context_options);
$fp = file_get_contents($url, false, $context);

//echo $fp;