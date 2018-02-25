<?php
	ini_set('zlib.output_compression', 'On');
	

	
   // Written by Ed Eliot (www.ejeliot.com) - provided as-is, use at your own risk
   	if (!defined('KEY')) {
		require_once "../../app/configuration.php";
	}

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
	
	
   /****************** start of config ******************/
   $FILE_TYPE = "text/javascript"; // type of code we're outputting
   $CACHE_LENGTH = "31356000"; // length of time to cache output file, default approx 1 year
   $CREATE_ARCHIVE = "true"; // set to false to suppress writing of code archive, files will be merged on each request
    if (is_dir(ROOT_DIR."/".THEME_PATH."/javascripts/archives")) {
      $ARCHIVE_FOLDER = ROOT_DIR."/".THEME_PATH."/javascripts/archives";
   } else {
      $ARCHIVE_FOLDER = ROOT_DIR.'/sites/'.KEY.'/cache/cache/'.THEME.'_js_archives'; // location to store archive, don't add starting or trailing slashes
   }
   // files to merge
	$aFiles = array(
	'jquery.js',
	'form.js',
	'supersleight.js',
	'sha1-min.js',
	'color.js',
   'jquery-ui-1.9.1.custom.min.js',
   'jquery.jplayer.min.js'
	);
	if (file_exists($_SERVER['DOCUMENT_ROOT']."/asset-proxy/javascripts/jwplayer.js") && file_exists($_SERVER['DOCUMENT_ROOT']."/asset-proxy/javascripts/player.swf")) {
		$aFilesb = array('jwplayer.js','videoplayer-jwplayer.js');
	} else {
		$aFilesb = array("videoplayer-custom.js");
	}
	$aFilesc = array("core.js");
	$aFiles = array_merge($aFiles,$aFilesb,$aFilesc);
	$aFiles2 = array(
	'custom.js'
	);
   /****************** end of config ********************/
   
   // this is prepended to all file / folder paths so files and archive folder should be specified relative to this
   	$sDocRoot2 = ROOT_DIR."/".THEME_PATH."/javascripts/";
	$sDocRoot = ROOT_DIR."/asset-proxy/javascripts/";

   /*
      if etag parameter is present then the script is being called directly, otherwise we're including it in 
      another script with require or include. If calling directly we return code othewise we return the etag 
      representing the latest files
   */
   if (isset($_GET['version'])) {
      $iETag = (int)$_GET['version'];     
      $sLastModified = gmdate('D, d M Y H:i:s', $iETag).' GMT';
      
      // see if the user has an updated copy in browser cache
      if (
         (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $sLastModified) ||
         (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $iETag)
      ) {
         header("{$_SERVER['SERVER_PROTOCOL']} 304 Not Modified");
         exit;
      }
      
      // create a directory for storing current and archive versions
      if ($CREATE_ARCHIVE && !is_dir($ARCHIVE_FOLDER)) {
         mkdir($ARCHIVE_FOLDER);
         if (!is_writable($ARCHIVE_FOLDER)) {
            chmod($ARCHIVE_FOLDER,0777);
         }
      }
      
      // get code from archive folder if it exists, otherwise grab latest files, merge and save in archive folder
      if ($CREATE_ARCHIVE && file_exists($ARCHIVE_FOLDER."/$iETag.cache")) {
         $sCode = file_get_contents($ARCHIVE_FOLDER."/$iETag.cache");
	   	  if ($iETag<1477397065) {
	    		 $sCode = str_replace('checkLivechat();','if ($("meta[name=disablelivechat]").length==0) { checkLivechat(); }',$sCode);
	   	  }
      } else {
         // get and merge code
         $sCode = 'if (typeof loadedalljs == "undefined") { var loadedalljs=true; ';
         $aLastModifieds = array();
         foreach ($aFiles as $sFile) {
            if ($sFile=="jquery.js" && file_exists("$sDocRoot2/jquery.js")) {
               $aLastModifieds[] = filemtime("$sDocRoot2/$sFile");
               $sCode .= file_get_contents("$sDocRoot2/$sFile")."\n\n";  
            } else {
               $aLastModifieds[] = filemtime("$sDocRoot/$sFile");
               $sCode .= file_get_contents("$sDocRoot/$sFile")."\n\n";   
            }
         }
		foreach ($aFiles2 as $sFile) {
            $aLastModifieds[] = filemtime("$sDocRoot2/$sFile");
            $sCode .= file_get_contents("$sDocRoot2/$sFile")."\n\n";
         }
		 /*
		if (file_exists("../../subfolder.php")) { // check for subfolder include file, trim from the URI before analysis
			include_once("../../subfolder.php");
			if (isset($subfolder)) {
				function subfolderReplace($data,$subfolder)
				{
					$data = str_replace("\"/actions","\"/".$subfolder."/actions",$data);
					$data = str_replace("'/actions","'/".$subfolder."/actions",$data);

					return $data;
				}
				$sCode = subfolderReplace($sCode,$subfolder);
			}	
		}*/
         // sort dates, newest first
         rsort($aLastModifieds);
		 
		 $sCode = str_replace('checkLivechat();','if ($("meta[name=disablelivechat]").length==0) { checkLivechat(); }',$sCode);
         
		  $sCode .= "
	  }";
		 $minifier = new Minify\JS();
		$minifier->add($sCode);
	//	$sCode = $minifier->minify();
         
		
		 
         if ($CREATE_ARCHIVE) {
            if ($iETag == $aLastModifieds[0]) { // check for valid etag, we don't want invalid requests to fill up archive folder
               $oFile = fopen($ARCHIVE_FOLDER."/$iETag.cache", 'w');
               if (flock($oFile, LOCK_EX)) {
                  fwrite($oFile, $sCode);
                  flock($oFile, LOCK_UN);
               }
               fclose($oFile);
            } else {
               // archive file no longer exists or invalid etag specified
               header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
               exit;
            }
         }
      }


      // send HTTP headers to ensure aggressive caching
      header('Expires: '.gmdate('D, d M Y H:i:s', time() + $CACHE_LENGTH).' GMT'); // 1 year from now
      header('Content-Type: '.$FILE_TYPE);
      header("Last-Modified: $sLastModified");
      header("ETag: $iETag");
      header('Cache-Control: max-age='.$CACHE_LENGTH.', must-revalidate');
      // output merged code
	 

#	    header('Content-Length: '.strlen($sCode));
	 
		echo $sCode;;
	     
     
   } else {
      // get file last modified dates
      $aLastModifieds = array();
      foreach ($aFiles as $sFile) {
         if ($sFile=="jquery.js" && file_exists("$sDocRoot2/jquery.js")) {
            $aLastModifieds[] = filemtime("$sDocRoot2/$sFile");
         } else {
            $aLastModifieds[] = filemtime("$sDocRoot/$sFile");
         }
      }
	foreach ($aFiles2 as $sFile) {
         $aLastModifieds[] = filemtime("$sDocRoot2/$sFile");
      }
      // sort dates, newest first
      rsort($aLastModifieds);
      if ($aLastModifieds[0]<1477397065) {
		  echo "1477397065";
      } else {
	      // output latest timestamp
	      echo $aLastModifieds[0];      	
      }
   }
?>