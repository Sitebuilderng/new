<?php
if (stripos(strrev($_REQUEST['file']), "sj.") === 0) {
	ini_set('zlib.output_compression', 'On');
	$js=true;	
}else{
	$js=false;
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
$fn = "../../".THEME_PATH."/javascripts/".$file;
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
// check if it's a master file first
$origfile = $file;

if (file_exists($file)) {
	$file = $file;
} else {
	$file = "../../".THEME_PATH."/javascripts/".$file;
}
function setHeadersJ($ext)
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
		header("Content-Type: application/x-shockwave-flash",true);		
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		break;
		case 'ico':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: image/vnd.microsoft.icon");		
		break;
		case 'css':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: text/css");		
		break;
		case 'js':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: text/javascript");		
		break;
		case 'htc':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header('Content-type: text/x-component');		
		break;
		case 'css':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header('Content-type: text/css');		
		break;
		default:
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: application/octet-stream");
		break;
	}
}
if (file_exists(ROOT_DIR.'/sites/'.KEY.'/theme_merge/javascripts/'.$origfile)) {

	$ext = pathinfo(ROOT_DIR.'/sites/'.KEY.'/theme_merge/javascripts/'.$origfile, PATHINFO_EXTENSION);
	if (isset($headers['IF-MODIFIED-SINCE']) && (strtotime($headers['IF-MODIFIED-SINCE']) == filemtime($file))) {
	    // Client's cache IS current, so we just respond '304 Not Modified'.
	   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime(ROOT_DIR.'/sites/'.KEY.'/theme_merge/javascripts/'.$origfile)).' GMT', true, 304);
	} else {
	    // Image not cached or cache outdated, we respond '200 OK' and output the image.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime(ROOT_DIR.'/sites/'.KEY.'/theme_merge/javascripts/'.$origfile)).' GMT', true, 200);
		if(!$js) {
			   header('Content-Length: '.filesize(ROOT_DIR.'/sites/'.KEY.'/theme_merge/javascripts/'.$origfile));
		   }
		setHeadersJ($ext);
		//	header("Content-Disposition: attachment; filename=\"$file\"");
		if ($js) {
			$file = 'if (typeof loaded'.md5($origfile).' == "undefined") { var loaded'.md5($origfile).'=true; '.file_get_contents(ROOT_DIR.'/sites/'.KEY.'/theme_merge/javascripts/'.$origfile).'}';			
		} else {
			$file=file_get_contents(ROOT_DIR.'/sites/'.KEY.'/theme_merge/javascripts/'.$origfile);
		}
		if (stristr(".min") || !$js) {
			echo $file;
		} else {
			$minifier = new Minify\JS($file);
			echo $minifier->minify();
		}
	}
} elseif (file_exists($file)) {

	$ext = pathinfo($file, PATHINFO_EXTENSION);
	if (isset($headers['IF-MODIFIED-SINCE']) && (strtotime($headers['IF-MODIFIED-SINCE']) == filemtime($file))) {
	    // Client's cache IS current, so we just respond '304 Not Modified'.
	   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($file)).' GMT', true, 304);
	} else {
	    // Image not cached or cache outdated, we respond '200 OK' and output the image.
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($file)).' GMT', true, 200);
		if(!$js) {

		    header('Content-Length: '.filesize($file));			
		}

		setHeadersJ($ext);
		//	header("Content-Disposition: attachment; filename=\"$file\"");
		if ($js) {
		$file = 'if (typeof loaded'.md5($file).' == "undefined") { var loaded'.md5($file).'=true; '.file_get_contents($file).'}';			
		} else {
			$file=file_get_contents($file);
		}

		if (stristr(".min") || !$js) {
			echo $file;
		} else {
			$minifier = new Minify\JS($file);
			echo $minifier->minify();
		}
		
	 }
	
} else {
	echo "not found";
}



?>