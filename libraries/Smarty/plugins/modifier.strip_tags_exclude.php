<?php
function smarty_modifier_strip_tags_exclude($string,$allowable_tags)
{
       return strip_tags($string,$allowable_tags);
}
?>