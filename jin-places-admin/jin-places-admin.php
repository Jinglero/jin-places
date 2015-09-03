<?php
/**
 * This is the main jin-places-admin plugin file, here we declare and call the important stuff for admin management
 * @author Pedro García <jinglero@gmail.com>
 * @since 0.0.2
 * @package jin-places
 */

if (!defined('ABSPATH'))
	exit; // Exit if accessed directly

echo "Hello Admin!";



add_action( 'admin_menu', 'jin_places_menu' );

/**
 * Ingresa los distintos niveles del menú de administración.
 * @return none
 */
function jin_places_menu() {
	$icon = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABfUlEQVQ4T52Tz1XCQBDGvwGCHGMFYgVgBYYOwiU8DAe2Au0AqECtIB6MPHIJJcQKDBWIHeANE8j4dvPgJSHgnzklOzO/2Zn5llBijuPrVI/vATbApIM4YNBE2FZYDKfiQZocvQHULPoYuCpCDgHubEygEQOviDRTQerxnIBrMILhwOpkwSUAL5DBXNlein5/KYOd6bRJSfVdfg9tK5dzHBBp50J0V/8BPBBwK6/L1a2QANpWHRAM2ZawLeN0C46vQ4sCImplAxn4BGD8OER1ZQmpxyEBF/KfgQ8A5q/WuKvquF7aSgp4FLZ1V6aZgyHuAS8zk5h8BSDuipve/E8AGfzkely2upNDzDod11NVhW2lgiqxXAtKxlo0AqjNhAWYlJBA3CRGC+CQ4/pkpw/lylV8noUgCpDQHJtaiMZaV/51Y4Xapo0Km2A2xKDX3uXlAa63JGa/UqH59ktb7JXo+Hr1LG4lCZsMdI4D0v2PAbTV48mYelxAiEgbZ1v4BtnNpRGzeMr6AAAAAElFTkSuQmCC";

	add_menu_page('Places  by @jinglero','Places', 'manage_options', 'jin-places', 'jin_places_admin_list', $icon, 20);
	add_submenu_page('jin-places', 'Agregar un Lugar a Places by Jinglero', 'Agregar', 'manage_options', 'jin-places-add', 'jin_places_admin_add' );
	add_submenu_page('jin-places', 'Configuración de Places by Jinglero', 'Configuración', 'manage_options', 'jin-places-config', 'jin_places_admin_config' );

}

/**
 * Dibuja el listado de lugares en el admin
 * @return [type] [description]
 */
function jin_places_admin_list() {
	echo '<div class="wrap">';
	echo '<p>Listado</p>';
	echo '</div>';
}

function jin_places_admin_add(){
	echo '<div class="wrap">';
	echo '<p>Alta</p>';
	echo '</div>';
}

function jin_places_admin_config(){
	echo '<div class="wrap">';
	echo '<p>Config</p>';
	echo '</div>';
}
?>