<?php
if (stripos(strrev($_REQUEST['file']), "ssc.") === 0) {
	ini_set('zlib.output_compression', 'On');
	$css=true;	
}else{
	$css=false;
}
require_once "../../app/configuration.php";

require_once ROOT_DIR . '/libraries/minify/src/Minify.php';
require_once ROOT_DIR . '/libraries/minify/src/CSS.php';
require_once ROOT_DIR . '/libraries/minify/src/JS.php';
require_once ROOT_DIR . '/libraries/minify/src/Exception.php';
require_once ROOT_DIR . '/libraries/minify/src/Exceptions/BasicException.php';
require_once ROOT_DIR . '/libraries/minify/src/Exceptions/FileImportException.php';
require_once ROOT_DIR . '/libraries/minify/src/Exceptions/IOException.php';
require_once ROOT_DIR . '/libraries/path-converter/src/ConverterInterface.php';
require_once ROOT_DIR . '/libraries/path-converter/src/Converter.php';

use MatthiasMullie\Minify;

$file = $_REQUEST['file'];
$fn = "../../".THEME_PATH."/css/".$file;
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

$file_time = filemtime($fn);
function setHeaders($ext)
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
if (file_exists(ROOT_DIR.'/sites/'.KEY.'/theme_merge/css/'.$file)) {
	$fn = ROOT_DIR.'/sites/'.KEY.'/theme_merge/css/'.$file;
	
	$ext = pathinfo(ROOT_DIR.'/sites/'.KEY.'/theme_merge/css/'.$file, PATHINFO_EXTENSION);
	if (isset($headers['IF-MODIFIED-SINCE']) && (strtotime($headers['IF-MODIFIED-SINCE']) == filemtime($fn))) {
	    // Client's cache IS current, so we just respond '304 Not Modified'.
	   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 304);
	} else {
	    // Image not cached or cache outdated, we respond '200 OK' and output the image.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
		if (!$css) {
	    header('Content-Length: '.filesize($fn));			
		}

		setHeaders($ext);
	
//	header("Content-Disposition: attachment; filename=\"$file\"");
		if (stristr(".min")||!$css) {
			readfile(ROOT_DIR.'/sites/'.KEY.'/theme_merge/css/'.$file,"r");
		} else {
			$minifier = new Minify\CSS(ROOT_DIR.'/sites/'.KEY.'/theme_merge/css/'.$file);
			echo $minifier->minify();
		}

	}	
} elseif (file_exists("../../".THEME_PATH."/css/".$file)) {
	$ext = pathinfo("../../".THEME_PATH."/css/".$file, PATHINFO_EXTENSION);
	if (isset($headers['IF-MODIFIED-SINCE']) && (strtotime($headers['IF-MODIFIED-SINCE']) == filemtime($fn))) {
	    // Client's cache IS current, so we just respond '304 Not Modified'.
	   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 304);
	} else {
	    // Image not cached or cache outdated, we respond '200 OK' and output the image.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($fn)).' GMT', true, 200);
		if (!$css) {
			   header('Content-Length: '.filesize($fn));
		   }
		setHeaders($ext);
	
//	header("Content-Disposition: attachment; filename=\"$file\"");
		if (stristr(".min")||!$css) {
			readfile("../../".THEME_PATH."/css/".$file,"r");
		} else {
			$minifier = new Minify\CSS("../../".THEME_PATH."/css/".$file);
			echo $minifier->minify();
		}
 

	}	
} else{
	echo "not found";
}



?>