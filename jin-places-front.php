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

//Actions
add_action( 'wp_print_scripts', 'enqueue_scripts' ); // Incluye los javascripts necesarios para el pluging
			
/**
 * Función que genera
 * @param  [array] $data Recibe todos los datos necesarios para dibujar el mapa
 * @return [boolean] true: todo ok; false: algo fallo
 */
function jin_places_map($data){

	echo '
	<ul id="tabs">
    <li><a href="javascript:void(0)" data-load="0" id="g0" title="Group A">Group A</a></li>
    <li><a href="javascript:void(0)" data-load="1" id="g1" title="Group B">Group B</a></li>
    <li><a href="javascript:void(0)" data-load="2" id="g2" title="Group C">Group C</a></li>
    <li><a href="javascript:void(0)" data-load="3" id="g3" title="Group D">Group D</a></li>
    <li><a href="javascript:void(0)" data-load="4" id="g4" title="Group E">Group E</a></li>
</ul>
<div id="controls-mixed"></div>
<div id="gmap-mixed"></div>
<div id="gmap"></div>
<div id="controls"></div>

	';
}

//Función que llevará el mapa al post, ejecutada desde el tag 'jin-places'
function jin_places_include($atts){
	echo "Hola mundillo";
	$data = array();
	jin_places_map($data);
}
function enqueue_scripts(){
	wp_enqueue_script('google-maps', 'http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7');
		//wp_enqueue_script('google-jsapi','https://www.google.com/jsapi');     
	wp_enqueue_script( 'jin-places-maplace', plugins_url('jin-places/static/').'maplace-0.1.3.min.js', array( 'jquery', 'google-maps' ));
	wp_enqueue_script( 'jin-places-front', plugins_url('jin-places/static/js/').'jin-places-front.js', array( 'jquery', 'jin-places-maplace' ));
}
//Agrego el tag para incluir el mapa
add_shortcode( 'jin-places', 'jin_places_include' );