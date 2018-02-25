<?php

function smarty_modifier_css_safe($text)
{	
    return str_replace(' ', '_', preg_replace("/[^A-Za-z0-9 ]/", '', $text));
}

?>
