<?php
require_once "../../app/configuration.php";

function rangeDownload($file)
{
        $fp = @fopen($file, 'rb');

        $size   = filesize($file); // File size
        $length = $size;           // Content length
        $start  = 0;               // Start byte
        $end    = $size - 1;       // End byte
        // Now that we've gotten so far without errors we send the accept range header
        /* At the moment we only support single ranges.
         * Multiple ranges requires some more work to ensure it works correctly
         * and comply with the spesifications: http://www.w3.org/Protocols/rfc2616/rfc2616-sec19.html#sec19.2
         *
         * Multirange support annouces itself with:
         * header('Accept-Ranges: bytes');
         *
         * Multirange content must be sent with multipart/byteranges mediatype,
         * (mediatype = mimetype)
         * as well as a boundry header to indicate the various chunks of data.
         */
        header("Accept-Ranges: 0-$length");
        // header('Accept-Ranges: bytes');
        // multipart/byteranges
        // http://www.w3.org/Protocols/rfc2616/rfc2616-sec19.html#sec19.2
        if (isset($_SERVER['HTTP_RANGE']))
        {
                $c_start = $start;
                $c_end   = $end;
                // Extract the range string
                list(, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);
                // Make sure the client hasn't sent us a multibyte range
                if (strpos($range, ',') !== false)
                {
                        // (?) Shoud this be issued here, or should the first
                        // range be used? Or should the header be ignored and
                        // we output the whole content?
                        header('HTTP/1.1 416 Requested Range Not Satisfiable');
                        header("Content-Range: bytes $start-$end/$size");
                        // (?) Echo some info to the client?
                        exit;
                }
                // If the range starts with an '-' we start from the beginning
                // If not, we forward the file pointer
                // And make sure to get the end byte if spesified
                if ($range{0} == '-')
                {
                        // The n-number of the last bytes is requested
                        $c_start = $size - substr($range, 1);
                }
                else
                {
                        $range  = explode('-', $range);
                        $c_start = $range[0];
                        $c_end   = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : $size;
                }
                /* Check the range and make sure it's treated according to the specs.
                 * http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
                 */
                // End bytes can not be larger than $end.
                $c_end = ($c_end > $end) ? $end : $c_end;
                // Validate the requested range and return an error if it's not correct.
                if ($c_start > $c_end || $c_start > $size - 1 || $c_end >= $size)
                {
                        header('HTTP/1.1 416 Requested Range Not Satisfiable');
                        header("Content-Range: bytes $start-$end/$size");
                        // (?) Echo some info to the client?
                        exit;
                }
                $start  = $c_start;
                $end    = $c_end;
                $length = $end - $start + 1; // Calculate new content length
                fseek($fp, $start);
                header('HTTP/1.1 206 Partial Content');
        }
        // Notify the client the byte range we'll be outputting
        header("Content-Range: bytes $start-$end/$size");
        header("Content-Length: $length");

        // Start buffered download
        $buffer = 1024 * 8;
        while(!feof($fp) && ($p = ftell($fp)) <= $end)
        {
                if ($p + $buffer > $end)
                {
                        // In case we're only outputtin a chunk, make sure we don't
                        // read past the length
                        $buffer = $end - $p + 1;
                }
                set_time_limit(0); // Reset time limit for big files
                echo fread($fp, $buffer);
                flush(); // Free up memory. Otherwise large files will trigger PHP's memory limit.
        }

        fclose($fp);
}


$file = $_REQUEST['file'];
if (file_exists("../../sites/".KEY."/downloads/".$file)) {
	$ext = strtolower(pathinfo("../../sites/".KEY."/downloads/".$file, PATHINFO_EXTENSION));
	$len = filesize("../../sites/".KEY."/downloads/".$file);
	switch ($ext) {
		case 'mpg':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: video/quicktime");		
		break;
		case 'wav':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: audio/vnd.wav");		
		break;
		case 'ogg':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: audio/ogg");		
		break;	
		case 'mp3':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: audio/mpeg");		
		break;
		case 'mp4':
		case 'm4v':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: video/quicktime");		
		break;
		case 'mov':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: video/quicktime");		
		break;
		case 'zip':
		header("Content-Type: application/zip");
		header("Content-Disposition: attachment; filename=\"$file\"");
		break;
		case 'pdf':
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline; filename=\"$file\"");
		
		break;
		case 'doc':
		header("Content-Type: application/msword");		
		header("Content-Disposition: attachment; filename=\"$file\"");
		break;
		case 'xls':
		header("Content-Type: application/vnd.ms-excel");		
		header("Content-Disposition: attachment; filename=\"$file\"");
		break;
		case 'ppt':
		header("Content-Type: application/vnd.ms-powerpoint");		
		header("Content-Disposition: attachment; filename=\"$file\"");
		break;
		case 'gif':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: image/gif");
		break;
		case 'jpg':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: image/jpg");
		break;
		case 'jpeg':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: image/jpg");
		break;
		case 'png':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: image/png");		
		break;
		case 'swf':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: application/x-shockwave-flash");		
		break;
		case 'exe':
		header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
		header("Content-Type: application/x-msdownload");
		break;
		case 'application':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/x-ms-application");
		break;
		case 'manifest':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/x-ms-manifest");
		break;
		case 'deploy':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/octet-stream");
		break;
		case 'xps':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/vnd.ms-xpsdocument");
		break;
		case 'xaml':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/xaml+xml");
		break;
		case 'xbap':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/x-ms-xbap");
		break;
		case 'xap':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/x-silverlight-app");
		break;
		case 'epub':
			header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); 
			header("Content-Type: application/epub+zip");
		break;
		
		default:
		header("Content-Type: application/force-download");
		break;
	}

	 
	if (isset($_SERVER['HTTP_RANGE'])) {
		rangeDownload("../../sites/".KEY."/downloads/".$file);
	} else {
		header('Content-Transfer-Encoding: binary');
		header("Content-Length: $len");
		if (ob_get_level()) {
		      ob_end_clean();
		    }
		readfile("../../sites/".KEY."/downloads/".$file,"r");			
	}

} else {
	echo "not found";
}



?>