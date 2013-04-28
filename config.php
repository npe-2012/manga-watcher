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


// Assing common_blocks tocb_{block_name}
$common_blocks = glob(ROOT.'templates/common_blocks/*.tpl');
array_map(AssignBlock, $common_blocks);



/**
 * function assign each given template to cb_{block} variable
 */
function AssignBlock($tpl)
{
	global $template;

	$tpl_info = pathinfo($tpl);
	$tpl_name = $tpl_info['filename'];
	$template->assign('cb_'.$tpl_name, $template->fetch('common_blocks/'.$tpl_name.'.tpl'));
}

?>