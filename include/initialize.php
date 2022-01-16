<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'ECommerce');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once("include/config.php");
require_once("include/function.php");
require_once("include/session.php");
require_once("include/accounts.php");
require_once("include/autonumbers.php");
require_once("include/products.php");
require_once("include/stockin.php");
require_once("include/categories.php");
require_once("include/sidebarFunction.php"); 
require_once("include/promos.php");
require_once("include/customers.php");
require_once("include/orders.php");
require_once("include/summary.php");
require_once("include/settings.php");




require_once("include/database.php");
?>