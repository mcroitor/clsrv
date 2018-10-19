<?php
function autoloader($name) {
    $path = ROOTPATH . "./module/{$name}.class.php";
    // echo "autoload '{$name}' class, path = {$path}<br />";
    if(file_exists($path) === true){
        include_once $path;
    }
}

spl_autoload_register('autoloader');
