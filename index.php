<?php
/**
 * The default page.
 * 
 */

// 0. include dependencies
require_once './config.php';
require_once './core/db.class.php';

$db = new db($dbcfg);
// 1. get params
// 2. parse params
// 3. create page. page load modules, module reacts to param
// 4.return page
