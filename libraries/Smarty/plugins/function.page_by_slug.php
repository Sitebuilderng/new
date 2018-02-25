<?php
require_once('basemodel.php');


function smarty_function_page_by_slug($params, &$smarty)
{
	global $configuration;
  	$config = array();
	$config['host']=$configuration['host'];
	$config['user']=$configuration['user'];
	$config['pass']=$configuration['pass'];
	$config['db']=$configuration['db'];
	require_once(ROOT_DIR.'/app/functions/showPage.php');

	$content = showPage(
		"/".$params['slug']."/"
		,null
		,null // blog title
		,null // blog category
		,null // search term
		,null // month
		,null  // year
		,null // day
		,false // product added var
		,false
		,null
		,"topLevel"
		,null
		,null
		,null
		,null
		,true
	);
	$smarty->assign($params['assign'],$content);
}	
?>