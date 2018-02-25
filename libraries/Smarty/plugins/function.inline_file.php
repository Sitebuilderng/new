<?php
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
function smarty_function_inline_file($params,&$smarty)
{
	switch ($params['type']) {
		case 'js':
	 
	 		$minifier = new Minify\JS();
	
			$folder="javascripts";
		break;
		case 'css':
	 		$minifier = new Minify\CSS();
			$folder="css";
		break;
	}
	switch ($params['location']) {
		case 'core':
			$file=file_get_contents(ROOT_DIR.'/asset-proxy/'.$folder."/".$params['file']);
			$minifier->add($file);
			if (strpos($params['file'],'min.')!==false || $params['skipmin']) {
				$sCode=$file;
			} else {
				$sCode = $minifier->minify();
			}

			if ($params['raw']) {
			return  $sCode;
			} else {
			return '<script type="text/javascript">'.$sCode.'</script>';				
			}

		break;
		case 'theme':
			$file=file_get_contents(ROOT_DIR.'/'.THEME_PATH.'/'.$folder."/".$params['file']);
			$minifier->add($file);
			if (strpos($params['file'],'min.')!==false || $params['skipmin']) {
				$sCode=$file;
			} else {
				$sCode = $minifier->minify();				
			}
			if ($params['raw']) {
				return $sCode;
			}else{
				return '<script type="text/javascript">'.$sCode.'</script>';				
			}

		break;
		case 'theme_concat_css':
		    if (file_exists(ROOT_DIR."/".THEME_PATH."/css/files.json")) {

		       $cssFiles = file_get_contents(ROOT_DIR."/".THEME_PATH."/css/files.json");
		       $cssFiles = json_decode($cssFiles,true);
		   	    $sDocRoot = ROOT_DIR."/".THEME_PATH.'/css';
				$sCode="";
	            foreach ($cssFiles as $sFile) {
	               $sCode .= "
				
	   ".file_get_contents("$sDocRoot/$sFile");
	            }
           
	   			$minifier->add($sCode);
	   			$sCode = $minifier->minify();
				if ($params['raw']) {
					return $sCode;
				}else{
					return '<style type="text/css" media="screen">'.$sCode.'</style>';
				}
		    }
            
		break;
	}
	
}