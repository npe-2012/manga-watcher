<?php

require_once 'core.php';

$uri = $_SERVER['REQUEST_URI'];
$path = preg_split("/[\/]/i", $uri, -1, PREG_SPLIT_NO_EMPTY);

switch($path[0])
{
	case NULL:
		$template->assign('content', '<h1>Главная страница</h1>');
	break;
	case 'book':
		if($path[1] == 'mirai_niki')
		{
			$template->assign('content', $template->fetch('book.tpl'));
			$template->assign('sidebar', $template->fetch('chapter_list.tpl'));
		}
	break;
	default:
		$template->assign('content', '<h1>404</h1>');
}

$template->display('index.tpl');

?>