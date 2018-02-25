<?php
require_once "../../../../app/configuration.php";
require_once "../../../../app/functions/imageResize.php";
function setHeaders($ext)
{
	switch (strtolower($ext)) {
		case 'gif':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT");
		header("Content-Type: image/gif");
		break;
		case 'jpg':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT");
		header("Content-Type: image/jpeg");
		break;
		case 'jpeg':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT");
		header("Content-Type: image/jpeg");
		break;
		case 'png':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT");
		header("Content-Type: image/png");
		break;
		case 'swf':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT");
		header("Content-Type: application/x-shockwave-flash");
		break;
		case 'ico':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT");
		header("Content-Type: image/vnd.microsoft.icon");
		break;
		default:
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT");
		header("Content-Type: application/octet-stream");
		break;
	}
}
$file = $_REQUEST['file'];
$last = $file[strlen($file)-1];
if ($last=="/") {
	$file = substr($file,0,strlen($file)-1);
}
$fn = "../../../../sites/".KEY."/images/galleries/".$file;
if( !function_exists('apache_request_headers') ) {
function apache_request_headers() {
  $arh = array();
  $rx_http = '/\AHTTP_/';
  foreach($_SERVER as $key => $val) {
    if( preg_match($rx_http, $key) ) {
      $arh_key = preg_replace($rx_http, '', $key);
      $rx_matches = array();
      $rx_matches = explode('_', $arh_key);
      if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
        foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
        $arh_key = implode('-', $rx_matches);
      }
      $arh[$arh_key] = $val;
    }
  }
  return( $arh );
}
}
$headers = array_change_key_case(apache_request_headers(), CASE_UPPER);

$file_time      = filemtime($fn);
$size = $_REQUEST['s']."-";
if (!is_numeric($_REQUEST['s'])) {
	if (isset($_REQUEST['width']) || isset($_REQUEST['height'])) {
		if (is_numeric($_REQUEST['width'])) {
			$width = $_REQUEST['width'];
			if (!is_numeric($_REQUEST['height'])) {
				$height = "auto";
			}
		}
		if (is_numeric($_REQUEST['height'])) {
			$height = $_REQUEST['height'];
			if (!is_numeric($_REQUEST['width'])) {
				$width = "auto";
			}
		}
		if (isset($_REQUEST['shrink'])) {
			if ($_REQUEST['shrink']=="true" || $_REQUEST['shrink']=="false" || $_REQUEST['shrink']=="longestedge") {
				if ($width!="auto"&&$height!="auto") {
				$shrink = $_REQUEST['shrink'];
				}
			}
		}
		$fno = "../../../../sites/".KEY."/images/galleries/".$file;
		$fn = "../../../../sites/".KEY."/images/thumbs/galpicthumb-".$width."-".$height."-".$shrink."-".$file;

		$file_timeo = filemtime($fno);
		$file_time      = filemtime($fn);
		if (file_exists($fn)) {
			if ($file_timeo >= $file_time) {
				@unlink($fn);
			}
		}


		$size = "";

	} else {

		$size = "";
		$thumbSize = 110;
		$thumbRatio = "auto";
		$height=110;
		$width=110;
		if (file_exists(ROOT_DIR."/".THEME_PATH."/gallery_sizes.csv")) {
			if (($handle = fopen(ROOT_DIR."/".THEME_PATH."/gallery_sizes.csv", "r")) !== FALSE) {
			    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			        $num = count($data);
					if ($row!=0) {
			        for ($c=0; $c < $num; $c++) {
			            $gallery[$row][] = strip_tags($data[$c]);
			        }
					}
			        $row++;
			    }
			    fclose($handle);
			}
			if (isset($gallery)) {
				foreach ($gallery as $gal) {
					if ($gal[0]=="default") {
						$bigX = $gal[3];
						$bigY = $gal[4];
						$thumbX = $gal[1];
						$thumbY = $gal[2];
						if ($thumbX==0) {
							$width="auto";
						} else {
							$width=$thumbX;
						}
						if ($thumbY==0) {
							$height="auto";
						} else {
							$height=$thumbY;
						}
					}
				}
			}
		}
		$shirnk="true";

		$fno = "../../../../sites/".KEY."/images/galleries/".$file;
		$file_timeo = filemtime($fno);


		$fn = "../../../../sites/".KEY."/images/thumbs/galpicthumb-".$width."-".$height."-".$shrink."-".$file;

		$file_time      = filemtime($fn);
		if (file_exists($fn)) {
			if ($file_timeo >= $file_time) {
				@unlink("../../../../sites/".KEY."/images/thumbs/galpicthumb-".$width."-".$height."-".$shrink."-".$file);
			}
		}


	}
} else {
	$fno = "../../../../sites/".KEY."/images/galleries/".$file;
	$file_timeo = filemtime($fno);
	$fn = "../../../../sites/".KEY."/images/thumbs/".$size."galpicthumb".$file;
	$file_time      = filemtime($fn);
	if (file_exists($fn)) {
		if ($file_timeo >= $file_time) {
			@unlink("../../../../sites/".KEY."/images/thumbs/".$size."galpicthumb".$file);
		}
	}
	$Sresize=true;
}

if (file_exists($fn)) {
	$ext = strtolower(pathinfo($fn, PATHINFO_EXTENSION));
	if (isset($headers['IF-MODIFIED-SINCE']) && (strtotime($headers['IF-MODIFIED-SINCE']) == filemtime($fn))) {
	    // Client's cache IS current, so we just respond '304 Not Modified'.
	   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 304);
	} else {
	    // Image not cached or cache outdated, we respond '200 OK' and output the image.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
	    header('Content-Length: '.filesize($fn));
		setHeaders($ext);

		//	header("Content-Disposition: attachment; filename=\"$file\"");
			readfile($fn,"r");
	 }

} else {
	if (!is_dir("../../../../sites/".KEY."/images/thumbs/")) {
		mkdir("../../../../sites/".KEY."/images/thumbs");
	}
	if (file_exists("../../../../sites/".KEY."/images/galleries/".$file)) {

		$ext = pathinfo("../../../../sites/".KEY."/images/galleries/".$file, PATHINFO_EXTENSION);
			if (isset($Sresize)) {

				make_thumb_for_pallet("../../../../sites/".KEY."/images/galleries/".$file,"galpicthumb".$file,$size,$ext);

		        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
			    header('Content-Length: '.filesize($fn));
				setHeaders($ext);
				readfile($fn,"r");

			} else {
				if( function_exists('exif_read_data') ) {
					$orientation = exif_read_data("../../../../sites/".KEY."/images/galleries/".$file);
				}
				$rotate=0;
				switch ($orientation['Orientation']) {
			      case 3:
			      $rotate=180;
			        break;
			      case 6:
			        $rotate=270;
			        break;
			      case 8:
			        $rotate=90;
			        break;
			    }


				$bigX = $width;
				$bigY = $height;
				$bigRatio = "auto";
				if ($bigX=="auto") {
					$bigRatio = "height";
					$bigSize = $bigY;
				} elseif ($bigY=="auto") {
					$bigRatio = "width";
					$bigSize = $bigX;
				} else {
					if ($shrink=="longestedge") {
						$bigRatio = "auto";
					} else {
						$bigRatio = "letterbox";
					}
					$bigSize = $bigX;
				}

				make_image(
					"../../../../sites/".KEY."/images/galleries/".$file
					,"../../../../sites/".KEY."/images/thumbs/galpicthumb-".$width."-".$height."-".$shrink."-".$file
					,$bigSize
					,$bigRatio
					,$shrink
					,$upload=false
					,$bigY
					,$rotate
				);

	        	header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
			    header('Content-Length: '.filesize($fn));
				setHeaders($ext);
				readfile($fn,"r");
			}



	} else {
		echo "not found";
	}
}



?>
