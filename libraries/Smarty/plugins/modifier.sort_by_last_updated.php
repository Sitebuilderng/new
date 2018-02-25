<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty usort modifier plugin
 *
 * Type:     modifier<br>
 * Name:     sort_by_last_updated<br>
 * Purpose:  returns array sorted by param string
 * @param array
 * @return array
 */
function smarty_usort_cmp($x, $y)
{
 if ( $x['lastUpdated'] == $y['lastUpdated'] )
  return 0;
 else if ( $x['lastUpdated'] < $y['lastUpdated'] )
  return 1;
 else
  return -1;
}
function smarty_modifier_sort_by_last_updated($array)
{	
	usort($array, "smarty_usort_cmp");
	return $array;
}

?>
