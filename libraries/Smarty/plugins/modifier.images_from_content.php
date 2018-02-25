<?php

function smarty_modifier_images_from_content($string,$strip_query=true,$url=false)
{
	if (!$url) {
		$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
		$url=$protocol.$_SERVER['HTTP_HOST'];
	}

	$string = explode('src="',$string);
	$strings = array_slice($string,1);
	foreach ($strings as $image) {
		$src= explode('"',$image);
		$src= $src[0];
		if ($strip_query) {
			$src= explode('?',$src);
			$src= $src[0];
		}
		if (substr($src, 0, 1)=="/") {
			$src = $url.$src;
		}
		$image_array[] = $src;
	}
	return $image_array;
}

?>
