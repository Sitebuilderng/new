<?php
function smarty_function_base64img($params,&$smarty)
{

	if (strpos($params['img'],'/graphics')===0) {
		$path = ROOT_DIR.'/'.THEME_PATH.'/';
	} else {
		$path = ROOT_DIR.'/sites/'.KEY.'/';
	}

	$imgData = base64_encode(file_get_contents($path.$params['img']));
	$src = 'data: '.mime_content_type($path.$params['img']).';base64,'.$imgData;
	return $src;
}
