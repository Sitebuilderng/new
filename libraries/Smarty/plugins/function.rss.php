<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty {rss} function plugin
 *
 * Type:     function<br>
 * Name:     rss<br>
 * Date:     December 18, 2009<br>
 * Purpose:  Return RSS data as array<br>
 * Input:
 *         - fee = feed url
 *         - limit = number of items to show
 */
	function twitterify($ret) {
	$ret = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("/@(\w+)/", "<a href=\"http://www.twitter.com/\\1\" target=\"_blank\" class=\"profileLink\">@\\1</a>", $ret);
	$ret = preg_replace("/#(\w+)/", "<a href=\"http://search.twitter.com/search?q=\\1\" target=\"_blank\" class=\"hashLink\">#\\1</a>", $ret);
	return $ret;
	}


function Timesince($original,$short) {
    // array of time period chunks
    $chunks = array(
	array(60 * 60 * 24 * 365 , 'year'),
	array(60 * 60 * 24 * 30 , 'month'),
	array(60 * 60 * 24 * 7, 'week'),
	array(60 * 60 * 24 , 'day'),
	array(60 * 60 , 'hour'),
	array(60 , 'min'),
	array(1 , 'sec'),
    );

    $today = time(); /* Current unix time  */
    $since = $today - $original;

    // $j saves performing the count function each time around the loop
    for ($i = 0, $j = count($chunks); $i < $j; $i++) {

	$seconds = $chunks[$i][0];
	$name = $chunks[$i][1];

	// finding the biggest chunk (if the chunk fits, break)
	if (($count = floor($since / $seconds)) != 0) {
	    break;
	}
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";

    if ($i + 1 < $j) {
	// now getting the second item
	$seconds2 = $chunks[$i + 1][0];
	$name2 = $chunks[$i + 1][1];

	// add second item if its greater than
	if (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0) {
		if ($short===false) {
	    	$print .= ($count2 == 1) ? ', 1 '.$name2 : " $count2 {$name2}s";			
		}

	}
    }
    return $print;
}

function smarty_function_rss($params, &$smarty)
{
	
	
    require_once('../libraries/SimplePie/simplepie.inc');
	if (isset($params['name'])) {
		$name = $params['name'];
	} else {
		$name = "templateRSS";
	}
	
	if (isset($params['twitterlinks'])) {
		$twitterlinks = $params['twitterlinks'];
	} else {
		$twitterlinks = false;
	}
	
	if (isset($params['limit'])) {
		$limit = $params['limit'];
	}
	if (isset($params['limit'])) {
		$limit = $params['limit'];
	} else {
		$limit = 0;
	}
	if (isset($params['cache_duration'])) {
		$duration = $params['cache_duration'];
	} else {
		$duration = 5600;
	}
	$feed = new SimplePie();
	$feed->set_feed_url($params['url']);
	$feed->set_cache_location ( 'cache' );
	$feed->set_cache_duration ( $duration );
	$feed->init();

	$i=0;
	foreach($feed->get_items(0,$limit) as $item)
	{
		
		if ($twitterlinks) {
		    $titles[$i]['title'] =  twitterify($item->get_title());
		} else {
	    	$titles[$i]['title'] =  $item->get_title();			
		}


	    $titles[$i]['link'] =  $item->get_link();    
	    $titles[$i]['description'] =  $item->get_description();    
		

	    $titles[$i]['date'] =  $item->get_date();
		if ($enclosure = $item->get_enclosure())
			{
				if ($url = $enclosure->get_link())
				{
					$titles[$i]['url'] = $url;
				}
				
				$thumb = $enclosure->get_thumbnail(0);
				$titles[$i]['thumb'] = $thumb;
					
			}
				
		$titles[$i]['ago'] = Timesince(strtotime($item->get_date()),false);
		$titles[$i]['ago_short'] = Timesince(strtotime($item->get_date()),true);

		$i++;
		
	}
    $smarty->assign($name,$titles);
}

/* vim: set expandtab: */

?>
