<?php
/*
 * default page
 *  1. include dependencies
 *  2. create page object
 *  3. generate html
 * generated page will communicate with site by API ./api/
 */

include_once './config.php';
include_once './core/autoload.php';
include_once './core/common.lib.php';
include_once './core/classes/db.class.php';
include_once './core/httpcodes.lib.php';

$conn = new db($dbcfg);

$page = new page($conn);
echo $page->html();
