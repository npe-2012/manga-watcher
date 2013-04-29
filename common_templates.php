<?php

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