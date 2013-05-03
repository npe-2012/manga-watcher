<?php

require_once 'core.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = preg_replace("/\/cron(.*)/i", "$1", $uri);
$path = preg_split("/[\/]/i", $uri, -1, PREG_SPLIT_NO_EMPTY);

require_once 'common_templates.php';

switch($path[0])
{
	case 'book':
		$template->assign('data', NULL);
		$template->display('cron_books.tpl');
	break;
	default:
		$template->display('cron.tpl');
}




?>