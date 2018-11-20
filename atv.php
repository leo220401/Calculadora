<?php
/**
 * plugin name: Calculadora
*/

function gaea ($atts) 
{
    return '<iframe src="'.plugins_url().'/atv/index.php" frameborder="0" width="400" height="210" style="border:0">';
}

add_shortcode('atv', 'gaea');