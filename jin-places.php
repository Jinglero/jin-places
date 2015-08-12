<?php
/**
 * This is the main jin-places plugin file, here we declare and call the important stuff
 * @author Pedro García <jinglero@gmail.com>
 * @since 0.0.1
 * @package jin-places
 */

/* 
Plugin Name: Places for wordpress
Plugin URI: http://jinglero.com/
Description: Places on google maps for wordpress.
Version: 0.0.1
Author: GeoDirectory
Author URI: http://jinglero.com/
Requires at least: 4.2
Tested up to: 4.2
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )
	die( 'No script kiddies please!' );

//Definiciones de Constantes
define( 'JINP_PATH', plugin_dir_path( __FILE__ ) );

if(is_admin()){
	//Incluyo admin
	include(JINP_PATH.'/jin-places-admin/jin-places-admin.php');
}else{
	include(JINP_PATH.'/jin-places-front.php');
}
