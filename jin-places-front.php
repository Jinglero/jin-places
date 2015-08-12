<?php
/**
 * This is the main jin-places-front plugin file, here we do front end work.
 * @author Pedro García <jinglero@gmail.com>
 * @since 0.0.2
 * @package jin-places
 */

if (!defined('ABSPATH'))
	exit; // Exit if accessed directly

echo 'Hello!';

//Función que llevará el mapa al post.
function jin_places_include($atts){
	echo "Hola mundillo";
}

//Agrego el tag para incluir el mapa
add_shortcode( 'jin-places', 'jin_places_include' );