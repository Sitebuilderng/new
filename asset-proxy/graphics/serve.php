<?php
require_once "../../app/configuration.php";
$file = $_REQUEST['file'];
$fn = "../../".THEME_PATH."/graphics/".$file;
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
function setHeadersG($ext)
{
	switch ($ext) {
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
		case 'css':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: text/css");		
		break;
		case 'svg':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: image/svg+xml");		
		break;
		case 'eot':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: application/vnd.ms-fontobject");		
		break;
		case 'ttf':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: application/x-font-ttf");		
		break;
		case 'woff':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: application/font-woff");		
		break;
		default:
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: application/octet-stream");
		break;
	}
}
$headers = array_change_key_case(apache_request_headers(), CASE_UPPER);

$file_time      = filemtime($fn);

if (file_exists(ROOT_DIR.'/sites/'.KEY.'/theme_merge/graphics/'.$file)) {
	$fn = ROOT_DIR.'/sites/'.KEY.'/theme_merge/graphics/'.$file;
	
	$ext = pathinfo(ROOT_DIR.'/sites/'.KEY.'/theme_merge/graphics/'.$file, PATHINFO_EXTENSION);
	if (isset($headers['IF-MODIFIED-SINCE']) && (strtotime($headers['IF-MODIFIED-SINCE']) == filemtime($fn))) {
	    // Client's cache IS current, so we just respond '304 Not Modified'.
	   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 304);
	} else {
	    // Image not cached or cache outdated, we respond '200 OK' and output the image.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
	    header('Content-Length: '.filesize($fn));
		setHeadersG($ext);
		//	header("Content-Disposition: attachment; filename=\"$file\"");
			readfile(ROOT_DIR.'/sites/'.KEY.'/theme_merge/graphics/'.$file,"r");
	 }
	
}
elseif (file_exists("../../".THEME_PATH."/graphics/".$file)) {
	$ext = pathinfo("../../".THEME_PATH."/graphics/".$file, PATHINFO_EXTENSION);
	if (isset($headers['IF-MODIFIED-SINCE']) && (strtotime($headers['IF-MODIFIED-SINCE']) == filemtime($fn))) {
	    // Client's cache IS current, so we just respond '304 Not Modified'.
	   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 304);
	} else {
	    // Image not cached or cache outdated, we respond '200 OK' and output the image.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
	    header('Content-Length: '.filesize($fn));
		setHeadersG($ext);
		//	header("Content-Disposition: attachment; filename=\"$file\"");
			readfile("../../".THEME_PATH."/graphics/".$file,"r");
	 }
	
} else {
	echo "not found";
}



?>