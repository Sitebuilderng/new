<?php
function smarty_function_imgwidth($params,&$smarty)
{

	if (strpos($params['img'],'/graphics')===0) {
		$path = ROOT_DIR.'/'.THEME_PATH.'/';
	} else {
		$path = ROOT_DIR.'/sites/'.KEY.'/';
	}

	$data = getimagesize($path.$params['img']);
	if ($params['retina']) {
		$ret = $data[0]/2;
	} else {
		$ret = $data[0];
	}
	return $ret;
}
