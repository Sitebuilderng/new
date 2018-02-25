<?php

function smarty_modifier_images_to_json($string,$strip_query=true)
{

	$string = explode('src="',$string);
	$strings = array_slice($string,1);
	foreach ($strings as $image) {
		$src= explode('"',$image);
		$src= $src[0];
		if ($strip_query) {
			$src= explode('?',$src);
			$src= $src[0];
		}
		$image_array[] = $src;
	}
	return json_encode($image_array);
}

?>
