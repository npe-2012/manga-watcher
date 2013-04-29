<?php

require_once 'core.php';

$uri = $_SERVER['REQUEST_URI'];
$path = preg_split("/[\/]/i", $uri, -1, PREG_SPLIT_NO_EMPTY);
$template->assign('current', $path[0]);

require_once 'common_templates.php';

switch($path[0])
{
	case NULL:
		$page['title'] = 'Manga Watcher';
		$page['text'] = '<p>Представляем вас новый каталог манги.</p>';
		$template->assign('page', $page);
		$template->assign('content', $template->fetch('page.tpl'));
	break;
	case 'book':
		if($path[1] == 'mirai_niki')
		{
			$template->assign('content', $template->fetch('book.tpl'));
			$template->assign('sidebar', $template->fetch('chapter_list.tpl'));
		}
	break;
	default:
		$page = $DB->SelectRow("SELECT * FROM page WHERE alias = ?", $path[0]);
		if($page)
		{
			$template->assign('page', $page);
			$template->assign('content', $template->fetch('page.tpl'));
		}
		else
		{
			$template->assign('content', '404.tpl');
		}
}

$template->display('index.tpl');

?>