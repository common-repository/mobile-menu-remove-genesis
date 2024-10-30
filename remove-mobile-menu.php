<?php
/**
 * Plugin Name: Mobile Menu Removal for Genesis
 * Plugin URI: https://vlivewebcreation.blogspot.com/p/genesis-mobile-menu-remove.html
 * Description: Remove Mobile Menu on Genesis Sample to Increase Cls Score.
 * Version: 2.0
 * Author: Vijay Malviya
 * Author URI: https://wpseohosts.com
 */

function MMRG_custom_styles() {
	wp_enqueue_style( 'mobile-menu-remove-genesis', plugin_dir_url( __FILE__ ) . 'mobile-menu-remove-genesis.css' );
}
add_action( 'wp_enqueue_scripts', 'MMRG_custom_styles' );

?>