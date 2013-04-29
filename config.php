<?php

define('ROOT', dirname(__FILE__).'/');

// Init template engine
define('SMARTY_DIR', ROOT.'libs/Smarty/');
require_once SMARTY_DIR.'Smarty.class.php';
$template = new Smarty;

// Set template and cache dirs
$template->setTemplateDir(ROOT.'templates/');
$template->setCompileDir(ROOT.'cache/');
$template->setCacheDir(ROOT.'cache/');


// Set $DB worker
require_once ROOT.'libs/DbSimple/Generic.php';
$DB = DbSimple_Generic::connect("mysql://umnyjcom_sergey:Hrew@23resT@localhost/umnyjcom_main");
$DB->Query("SET NAMES UTF8");

?>